<?php
declare(strict_types=1);

// Building Business Permits
$permits = [
    [
        'name' => 'Licencia de actividad',
        'category' => Category::PERMIT,
        'subcategory' => PermitCategory::ACTIVITY,
        'description' => 'Tramitamos la licencia de actividad con revisión técnica previa, documentación adecuada y acompañamiento para abrir o legalizar tu negocio con menos incidencias.',
        'text' => '<p>La <strong>licencia de actividad</strong> es el trámite necesario para <strong>implantar, abrir o legalizar</strong> determinadas actividades en un <strong>local, nave o espacio productivo</strong>. Este servicio incluye el <strong>análisis previo de viabilidad</strong>, la identificación del procedimiento aplicable y la preparación de la <strong>documentación técnica necesaria</strong>.</p><p>En ' . COMPANY_BRAND . ' revisamos las condiciones del inmueble, detectamos posibles <strong>condicionantes normativos</strong> y te ayudamos a <strong>tramitar la licencia de actividad</strong> con un enfoque técnico claro y práctico. El objetivo es <strong>reducir requerimientos</strong>, evitar retrasos y preparar correctamente el expediente desde el inicio.</p><p>Este servicio es especialmente útil para titulares de negocios, empresas y propietarios que necesitan <strong>seguridad técnica</strong> antes de invertir en <strong>adecuación, apertura o legalización de una actividad</strong>.</p>',
        'list' => [
            '<strong>Análisis previo de viabilidad técnica y normativa</strong>.',
            'Revisión del <strong>local o nave</strong> antes de iniciar la tramitación.',
            'Identificación del procedimiento aplicable: <strong>licencia</strong>, <strong>comunicación previa</strong> o declaración responsable.',
            'Preparación de la <strong>documentación técnica necesaria</strong>.',
            'Detección de posibles incumplimientos o <strong>adaptaciones necesarias</strong>.',
            'Soporte durante la presentación y respuesta a <strong>requerimientos</strong>.',
            'Enfoque orientado a <strong>reducir incidencias y retrasos</strong>.',
            'Acompañamiento técnico para <strong>abrir o legalizar la actividad</strong> con mayor seguridad.'
        ],
        'images' => [
            e('/images/permits/Defectos-constructivos.webp'),
            e('/images/permits/Danos-estructurales.webp'),
            e('/images/permits/Causas-de-humedad.webp'),
            e('/images/permits/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/permits/Defectos-constructivos.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'licencia de actividad, tramitación licencia de actividad, ingeniero licencia actividad, licencia apertura, legalización de actividad, documentación licencia actividad, licencia para local, licencia para nave'
    ],
    [
        'name' => 'Licencia para nave industrial',
        'category' => Category::PERMIT,
        'subcategory' => PermitCategory::ACTIVITY,
        'description' => 'Gestionamos la licencia de actividad para nave industrial con revisión técnica del espacio, documentación exigida y soporte para adaptar la actividad a la normativa aplicable.',
        'text' => '<p>La <strong>licencia para nave industrial</strong> requiere un análisis técnico específico del uso previsto, las condiciones del inmueble y la <strong>normativa aplicable</strong> según la actividad. No todas las naves sirven para cualquier implantación, por lo que conviene revisar su <strong>viabilidad técnica</strong> antes de realizar inversiones o iniciar trámites.</p><p>En ' . COMPANY_BRAND . ' estudiamos si la nave cumple los <strong>requisitos técnicos necesarios</strong>, qué documentación hace falta y qué adaptaciones pueden ser necesarias para <strong>tramitar correctamente la actividad</strong>. También te orientamos sobre el procedimiento más adecuado según el tipo de uso y municipio.</p><p>Este servicio está pensado para empresas, titulares de naves y negocios que necesitan <strong>abrir, ampliar, legalizar o adaptar una actividad industrial</strong> con criterio técnico y documental.</p>',
        'list' => [
            '<strong>Revisión técnica previa de la nave</strong> y de la actividad prevista.',
            '<strong>Análisis de viabilidad normativa</strong> antes de alquilar, comprar o adaptar.',
            'Identificación de <strong>condicionantes técnicos relevantes</strong>.',
            'Preparación del <strong>proyecto</strong> o documentación exigida para la licencia.',
            'Evaluación de <strong>adecuaciones necesarias en la nave industrial</strong>.',
            'Acompañamiento técnico durante la <strong>tramitación</strong>.',
            'Soporte para <strong>legalización</strong>, ampliación o cambio de actividad.',
            'Enfoque para evitar <strong>inversiones a ciegas</strong> y requerimientos posteriores.'
        ],
        'images' => [
            e('/images/permits/Defectos-constructivos.webp'),
            e('/images/permits/Danos-estructurales.webp'),
            e('/images/permits/Causas-de-humedad.webp'),
            e('/images/permits/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/permits/Danos-estructurales.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'licencia nave industrial, licencia de actividad nave industrial, legalizar nave industrial, proyecto técnico nave industrial, ingeniero nave industrial, apertura nave industrial, actividad industrial'
    ],
    [
        'name' => 'Comunicación previa',
        'category' => Category::PERMIT,
        'subcategory' => PermitCategory::ACTIVITY,
        'description' => 'Te ayudamos a tramitar la comunicación previa de actividad con revisión técnica, documentación correcta y validación previa de los requisitos del local o nave.',
        'text' => '<p>La <strong>comunicación previa</strong> es un procedimiento aplicable a determinadas actividades cuando la normativa permite iniciar la actividad presentando la documentación correspondiente, sin necesidad de esperar una licencia en sentido estricto. Aun así, requiere que el establecimiento y la <strong>documentación técnica</strong> cumplan los <strong>requisitos exigibles</strong>.</p><p>En ' . COMPANY_BRAND . ' analizamos si tu caso puede tramitarse por <strong>comunicación previa de actividad</strong>, revisamos las condiciones del espacio y preparamos la <strong>documentación necesaria</strong> para presentar el expediente con mayor seguridad.</p><p>Este servicio es útil para negocios que necesitan una vía de tramitación más ágil, pero quieren evitar <strong>errores, omisiones documentales o problemas posteriores con la administración</strong>.</p>',
        'list' => [
            'Comprobación de si la actividad puede tramitarse mediante <strong>comunicación previa</strong>.',
            'Revisión técnica del <strong>local o nave</strong> antes de presentar la documentación.',
            'Preparación de <strong>memoria, certificados y documentación exigida</strong>.',
            'Validación de <strong>requisitos técnicos y normativos</strong> básicos.',
            'Detección de posibles incidencias antes de la <strong>presentación</strong>.',
            'Soporte técnico para <strong>presentar correctamente el expediente</strong>.',
            'Orientación sobre limitaciones y responsabilidades del <strong>procedimiento</strong>.',
            'Enfoque para <strong>reducir errores y requerimientos administrativos</strong>.'
        ],
        'images' => [
            e('/images/permits/Defectos-constructivos.webp'),
            e('/images/permits/Danos-estructurales.webp'),
            e('/images/permits/Causas-de-humedad.webp'),
            e('/images/permits/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/permits/Causas-de-humedad.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'comunicación previa, comunicación previa actividad, comunicación previa apertura, declaración responsable actividad, tramitación comunicación previa, documentación comunicación previa, ingeniero comunicación previa'
    ],
    [
        'name' => 'Legalización de actividad',
        'category' => Category::PERMIT,
        'subcategory' => PermitCategory::ACTIVITY,
        'description' => 'Gestionamos la legalización de actividades existentes con revisión técnica, análisis documental y adecuación a la normativa para regularizar la situación de tu negocio.',
        'text' => '<p>La <strong>legalización de actividad</strong> es necesaria cuando una actividad ya está en funcionamiento o implantada y debe <strong>regularizar su situación técnica o administrativa</strong>. Puede implicar revisar documentación existente, adaptar el espacio, justificar normativamente la actividad o corregir incidencias detectadas.</p><p>En ' . COMPANY_BRAND . ' analizamos el estado actual del local o nave, detectamos qué falta para <strong>regularizar la actividad</strong> y preparamos la <strong>documentación necesaria</strong> para avanzar con mayor seguridad técnica y administrativa.</p><p>Este servicio resulta especialmente útil en <strong>cambios de titularidad</strong>, negocios ya operativos sin expediente completo, actividades con documentación desactualizada o situaciones en las que se necesita <strong>poner al día la implantación existente</strong>.</p>',
        'list' => [
            'Revisión de la <strong>situación técnica y documental</strong> actual de la actividad.',
            'Análisis de deficiencias o faltas de documentación para <strong>regularizar</strong>.',
            'Evaluación del <strong>local o nave</strong> respecto a la normativa aplicable.',
            'Propuesta de <strong>adecuaciones necesarias</strong> antes de la legalización.',
            'Preparación del <strong>expediente técnico y documental</strong>.',
            'Soporte en cambios de actividad, <strong>regularización</strong> o actualización documental.',
            'Acompañamiento técnico ante <strong>requerimientos</strong> o incidencias administrativas.',
            'Enfoque orientado a <strong>regularizar la actividad</strong> con criterio y trazabilidad.'
        ],
        'images' => [
            e('/images/permits/Defectos-constructivos.webp'),
            e('/images/permits/Danos-estructurales.webp'),
            e('/images/permits/Causas-de-humedad.webp'),
            e('/images/permits/Incumplimiento-contrato-obra.webp'),
        ],
        'slide' => Status::ACTIVE,
        'slide-image' => e('/images/permits/Incumplimiento-contrato-obra.webp'),
        'status' => Status::ACTIVE,
        'keywords' => 'legalización de actividad, legalizar actividad, regularización de actividad, legalización nave industrial, legalización local comercial, documentación actividad, ingeniero legalización actividad'
    ],
];

// Solo permits activos
$permits = array_filter(
    $permits,
    static fn(array $permit): bool => ($permit['status'] ?? null) === Status::ACTIVE
);

foreach ($permits as &$permit) {
    $permit['title'] = $permit['name'];
    $permit['alt'] = 'Imagen de ' . $permit['name'];
    $permit['url'] = $pages['Permits']['url'] . titleToUrl($permit['name']);
    $permit['slide-text'] = $permit['description'];
}
unset($permit);
?>