
<?php
defined('TYPO3') or die('Access denied.');
// Fields array has been moved here to make code cleaner
require_once 'tt_content_fields.php';

// Poekmon Element Basic info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Hero Slider',
        'my_portfolio_element',
        'content-target',
    ],
    'textmedia',
    'after'
);
// Here you decide what input fields to show.
$GLOBALS['TCA']['tt_content']['types']['my_portfolio_element'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            hero_slider_title; Hero Slider Title,
            hero_slider_subtitle; Hero Slider Subtitle,
            hero_slider_image; Hero Slider Image,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
    ],
];

// Add this fields to db
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $allFields);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'portfolio_site',
    'ProjectList',
    'A list of all porjects',
    'EXT:portfolio_site/Resources/Public/Icons/project-icon.svg'
);
