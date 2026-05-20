<?php

/**
 * Extension Manager/Repository config file for ext "artmediagallery12".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'artmediagallery12',
    'description' => 'artmediagallery ported to cms version 12',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-13.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Artmediagallery12\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'efrank@eduardofrank.co',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];
