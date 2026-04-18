<?php

use App\Core\Config;

$name = Config::get('company.name');

$pageContent = [
    'home' => [
        'text' => "<p>At {$name} we offer <strong>technical engineering</strong> focused on <strong>technical projects</strong>, <strong>activity licenses</strong> and <strong>expert reports</strong>. We work with a clear, rigorous and independent approach to help you resolve procedures, adapt spaces and technically document each case.</p><p>We provide service to both companies and activity holders as well as to individuals, communities and firms that need support in <strong>opening or legalizing businesses</strong>, <strong>adapting premises and warehouses</strong> or <strong>technical analysis of damages, dampness, cracks and construction non-compliance</strong>.</p><p>The objective is to provide <strong>technical clarity, well-structured documentation and a useful path of action</strong> from the initial analysis to the processing or final report.</p>",
        'list' => [],
        'keywords' => 'technical engineering, technical projects, activity licenses, forensic engineering, expert reports, expert opinions, legalizing activity, industrial warehouse license',
        'images' => [
            [
                'src' => '/images/home1.jpg',
                'alt' => 'Image Home 1',
                'category' => 'Dampness',
                'title' => 'Dampness Causes',
                'description' => 'Technical analysis of the causes of dampness in buildings, homes and commercial premises.',
            ],
        ],
    ]
];

return [
    'pages' => $pageContent,
];