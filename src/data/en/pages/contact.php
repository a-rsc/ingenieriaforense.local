<?php

$pageContent = [
    'keywords' => 'contact technical engineering, quote activity license, quote technical project, quote technical report, technical consultation, expert opinion, forensic engineering',
    'content' => [
        'item_1_title' => '',
        'item_1' => '<p>If you need help with a <strong>technical project</strong>, an <strong>activity license</strong> or a <strong>technical report</strong>, you can contact us to evaluate your case and guide you on the best technical approach.</p><p>Tell us about your situation, the available documentation and the objective you need to resolve. We will analyze your case to advise you on whether a project, a procedure, a previous technical review or a more comprehensive technical report is needed.</p><p>This is the entry point to request a <strong>quote</strong>, resolve questions and take the next step with a clearer and more organized foundation.</p>',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/contact.jpg',
            'alt' => $config['app']['translations']['alt'] . 'Contact',
            'category' => '',
            'title' => 'Contact',
            'description' => 'If you need help with a technical project, an activity license or a technical report, you can contact us to evaluate your case and guide you on the best technical approach.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];