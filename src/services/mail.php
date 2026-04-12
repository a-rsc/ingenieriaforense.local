<?php
declare(strict_types=1);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(403);
        echo 'Acceso no permitido.';
        exit;
    }

    // Anti-spam muy básico: honeypot (añade un input hidden name="hp" vacío en el form)
    if (!empty($_POST['hp'] ?? '')) {
        http_response_code(400);
        echo 'Solicitud no válida.';
        exit;
    }

    // Lee mensajes JSON con tolerancia a errores
    $messagesPath = BASE_PATH . '/src/services/messages.json';
    $messages = [
        '200' => '¡Gracias! Tu mensaje ha sido enviado.',
        '400' => 'Por favor, completa el formulario e inténtalo de nuevo.',
        '403' => 'Acceso no permitido.',
        '500' => 'Se produjo un error al enviar el mensaje. Inténtalo más tarde.'
    ];

    if (is_file($messagesPath)) {
        $json = @file_get_contents($messagesPath);
        if ($json !== false) {
            $decoded = json_decode($json, true);
            if (is_array($decoded)) {
            // Mezcla sin reindexar y sin sobrescribir claves existentes en $messages
            $messages = $messages + $decoded;            }
        }
    }

    // Sanitización dura para evitar inyección de cabeceras
    $stripCRLF = static fn(string $s): string => str_replace(["\r", "\n"], '', $s);

    // Datos del remitente
    $nameRaw    = trim((string)($_POST['name'] ?? ''));
    $emailRaw   = trim((string)($_POST['email'] ?? ''));
    $phoneRaw   = trim((string)($_POST['phone'] ?? ''));
    $subjectRaw = trim((string)($_POST['subject'] ?? ''));
    $messageRaw = trim((string)($_POST['message'] ?? ''));

    // Normaliza/limpia
    $name    = $stripCRLF(strip_tags($nameRaw));
    $email   = $stripCRLF(filter_var($emailRaw, FILTER_SANITIZE_EMAIL));
    $phone   = $stripCRLF($phoneRaw);
    $subject = $stripCRLF($subjectRaw);
    $message = $messageRaw; // puede contener saltos, no quitar CRLF aquí

    // Validaciones
    $name       = mb_substr($name, 0, 100, 'UTF-8');
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $phoneOk    = (bool)preg_match('/^[\d\s\+\-\(\)]{6,20}$/', $phone); // simple
    $subject    = mb_substr($subject, 0, 150, 'UTF-8');
    $message    = mb_substr($message, 0, 5000, 'UTF-8');

    if ($name === '' || !$validEmail || !$phoneOk || $subject === '' || $message === '') {
        http_response_code(400);
        echo $messages['400'];
        exit;
    }

    // Rate limiting muy simple: 1 envío cada 20s por sesión
    $now = time();
    if (!empty($_SESSION['last_mail_ts']) && ($now - (int)$_SESSION['last_mail_ts']) < 20) {
        http_response_code(429);
        echo 'Por favor, espera unos segundos antes de volver a enviar.';
        exit;
    }

    // Construye el contenido con CRLF
    $lines = [
        "Name: {$name}",
        "Email: {$email}",
        "Phone: {$phone}",
        "Subject: {$subject}",
        "Message:",
        $message,
    ];
    $content = implode("\r\n", $lines);

    // Cabeceras de correo
    // Usa un From de tu dominio para evitar problemas de SPF/DMARC
    $fromName  = COMPANY_NAME;
    $fromEmail = EMAIL_FROM;

    // Encabezados seguros con UTF-8
    $encodedFromName = '=?UTF-8?B?' . base64_encode($fromName) . '?=';
    $encodedSubject  = '=?UTF-8?B?' . base64_encode($subject) . '?=';

    $headers = [];
    $headers[] = "From: {$encodedFromName} <{$fromEmail}>";
    $headers[] = "Reply-To: {$name} <{$email}>";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/plain; charset=UTF-8";
    $headers[] = "Content-Transfer-Encoding: 8bit";

    $headersStr = implode("\r\n", $headers);

    // Envía
    $to = EMAIL_TO;
    $ok = @mail($to, $encodedSubject, $content, $headersStr);

    // Marca rate limit si fue intento real
    $_SESSION['last_mail_ts'] = $now;

    if ($ok) {
        http_response_code(200);
        echo $messages['200'];
    } else {
        http_response_code(500);
        echo $messages['500'];
    }
?>