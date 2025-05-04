<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Reservations',
    'description' => '',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TYPO3Incubator\\Reservations\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'author' => 'The TYPO3 Community',
    'author_email' => 'info@typo3.org',
    'version' => '0.0.1',
];
