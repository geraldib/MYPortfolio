<?php

/**
 * Extension Manager/Repository config file for ext "portfolio_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Portfolio Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Geraldib\\PortfolioSite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Gerald Ibra',
    'author_email' => 'geri.ibra@gmail.com',
    'author_company' => 'GeraldIb',
    'version' => '1.0.0',
];
