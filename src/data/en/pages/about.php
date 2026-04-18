<?php

use App\Core\Config;

$name = Config::get('company.name');

$pageContent = [
    'about' => [
        'text' => "<p><strong>{$name}</strong> is a firm specialized in <strong>technical projects</strong>, <strong>activity licenses</strong> and <strong>forensic engineering</strong>. We work with a professional approach based on technical rigor, documentary clarity and the real usefulness of each intervention.</p><p>Our work is aimed at helping companies, individuals, communities and firms to solve technical needs related to administrative procedures, space adaptation, damage analysis and the preparation of expert reports.</p><p>We prioritize <strong>clarity, professional independence and technical traceability</strong> so that each project, license or report provides a solid basis for deciding, processing or defending a position with foundation.</p>",
        'item_1' => 'History',
        'item_1_text' => '<p>We were born with the purpose of providing high-level technical solutions in the field of technical projects, activity licenses and expert reports. From the beginning, we brought together a team of engineers specialized in different disciplines, committed to rigorous analysis, objectivity and professional independence.</p>',
        'item_2' => 'Trajectory',
        'item_2_text' => '<p>Throughout our trajectory we have accompanied private clients, companies and public administrations in the resolution of complex cases, preparing clear, verifiable and well-founded reports. Our work is supported by proven methodologies and the continuous updating of knowledge.</p>',
        'item_3' => 'Methodology',
        'item_3_text' => '<p>We apply a multidisciplinary approach with on-site inspections, documentary contrast and regulatory analysis. Each report includes diagnosis of causes, damage assessment and solid conclusions, prepared to withstand technical and legal scrutiny.</p>',
        'item_4' => 'Values',
        'item_4_value_1' => 'Quality: ',
        'item_4_value_1_text' => 'continuous improvement and regulatory compliance.',
        'item_4_value_2' => 'Technical rigor: ',
        'item_4_value_2_text' => 'objective and verifiable criteria.',
        'item_4_value_3' => 'Independence: ',
        'item_4_value_3_text' => 'impartiality throughout the process.',
        'item_4_value_4' => 'Transparency: ',
        'item_4_value_4_text' => 'clear communication with the client.',
        'item_5' => 'Meet our team',
        'item_5_text' => 'Want to know more about our team of engineers and areas of specialization? Contact us for detailed information.',
        'list' => [],
        'keywords' => 'technical engineering, technical projects, activity licenses, forensic engineering, expert reports, expert opinions, legalizing activity, industrial warehouse license',
        'images' => [
            [
                'src' => '/images/about1.jpg',
                'alt' => 'Image About 1',
                'category' => 'About Us',
                'title' => 'About Us',
                'description' => 'Learn more about our company and our team.',
            ],
        ],
    ]
];

return [
    'pages' => $pageContent,
];