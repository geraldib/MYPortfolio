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
        'image' => [
            'label' => 'Image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', [], $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'])
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, image'],
    ],
];
