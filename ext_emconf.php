<?php

/**
 * Extension Manager/Repository config file for ext "buddysystem".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'BuddySystem',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Lessingstr\\Buddysystem\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Aniket',
    'author_email' => 'aniket_kadam@live.com',
    'author_company' => 'Lessingstr',
    'version' => '1.0.0',
];
