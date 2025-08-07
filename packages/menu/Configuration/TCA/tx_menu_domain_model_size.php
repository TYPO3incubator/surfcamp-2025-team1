<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:menu/Resources/Private/Language/locallang_db.xlf:tx_menu_domain_model_drinksize',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'iconfile' => 'EXT:menu/Resources/Public/Icons/drinksize.svg',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'translationSource' => 'l10n_source',
        'languageField' => 'sys_language_uid',
    ],
    'columns' => [
        'size' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:drink.size',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size' => 10,
                'min' => 0.00,
            ],
        ]
    ],
    'types' => [
        '0' => [
            'showitem' => 'size',
        ],
    ]
];
