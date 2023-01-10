<?php
return [
    'ctrl' => [
        'title' => 'Project',
        'label' => 'name',
        'iconfile' => 'EXT:portfolio_site/Resources/Public/Icons/project-icon.svg'
    ],
    'columns' => [
        'name' => [
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'label' => 'Description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ],
        ],
        'main_image' => [
            'exclude' => true,
            'label' => 'image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'main_image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'label 2'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                    ],
                    'maxitems' => 1,
                    'minitems' => 1,
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, main_image'],
    ],
];
