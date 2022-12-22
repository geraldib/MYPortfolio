
                <?php
                defined('TYPO3') or die('Access denied.');

                // All fields
                $allFields = [
                    'hero_slider_title' => [
                        'exclude' => 0,
                        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.selected_pokemon',
                        'config' => [
                            'type' => 'text',
                        ],
                    ],
                    'hero_slider_subtitle' => [
                        'exclude' => 0,
                        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.selected_pokemon',
                        'config' => [
                            'type' => 'text',
                        ],
                    ],
                    'hero_slider_image' => [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.image_pokemon',
                        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', [
                            'appearance' => [
                                'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.image_pokemon'
                            ],
                        ], $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'])
                    ],
                ];
