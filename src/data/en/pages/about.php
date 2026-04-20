<?php

use App\Core\Config;

$pageContent = [
    'keywords' => 'technical engineering, technical projects, activity licenses, forensic engineering, expert reports, expert opinions, legalizing activity, industrial warehouse license',
    'content' => [
        'item_1_title' => '',
        'item_1' => "<p><strong>{$config['company']['name']}</strong> is a firm specialized in <strong>technical projects</strong>, <strong>activity licenses</strong> and <strong>forensic engineering</strong>. We work with a professional approach based on technical rigor, documentary clarity and the real usefulness of each intervention.</p><p>Our work is aimed at helping companies, individuals, communities and firms to solve technical needs related to administrative procedures, space adaptation, damage analysis and the preparation of expert reports.</p><p>We prioritize <strong>clarity, professional independence and technical traceability</strong> so that each project, license or report provides a solid basis for deciding, processing or defending a position with foundation.</p>",
        'item_2_title' => 'History',
        'item_2' => '<p>We were born with the purpose of providing high-level technical solutions in the field of technical projects, activity licenses and expert reports. From the beginning, we brought together a team of engineers specialized in different disciplines, committed to rigorous analysis, objectivity and professional independence.</p>',
        'item_3_title' => 'Trajectory',
        'item_3' => '<p>Throughout our trajectory we have accompanied private clients, companies and public administrations in the resolution of complex cases, preparing clear, verifiable and well-founded reports. Our work is supported by proven methodologies and the continuous updating of knowledge.</p>',
        'item_4_title' => 'Methodology',
        'item_4' => '<p>We apply a multidisciplinary approach with on-site inspections, documentary contrast and regulatory analysis. Each report includes diagnosis of causes, damage assessment and solid conclusions, prepared to withstand technical and legal scrutiny.</p>',
        'item_5_title' => 'Values',
        'item_5_1_title' => 'Quality: ',
        'item_5_1' => 'continuous improvement and regulatory compliance.',
        'item_5_2_title' => 'Technical rigor: ',
        'item_5_2' => 'objective and verifiable criteria.',
        'item_5_3_title' => 'Independence: ',
        'item_5_3' => 'impartiality throughout the process.',
        'item_5_4_title' => 'Transparency: ',
        'item_5_4' => 'clear communication with the client.',
        'item_6_title' => 'Meet our team',
        'item_6' => 'Want to know more about our team of engineers and areas of specialization? Contact us for detailed information.',
        'list' => [],
    ],
    'images' => [
        [
            'src' => '/images/pages/about.jpg',
            'alt' => $config['app']['translations']['alt'] . 'About',
            'category' => '',
            'title' => 'About Us',
            'description' => 'Learn more about our company and our team.',
        ],
    ],
    'schema' => [
        'name' => $config['app']['translations']['schema']['page'] . $pages[$pageKey]['name'],
    ],
];

return [
    'pages' => $pageContent,
];