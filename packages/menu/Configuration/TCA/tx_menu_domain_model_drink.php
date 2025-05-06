<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:drink.be_title',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'iconfile' => 'EXT:menu/Resources/Public/Images/drink.svg',
        'searchFields' => 'title',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'translationSource' => 'l10n_source',
        'languageField' => 'sys_language_uid',
    ],
    'columns' =>[
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:drink.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'size' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:drink.size',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'min' => 0.00,
                'required' => true,
            ],
        ],
        'price' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:drink.price',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'min' => 0.00,
                'required' => true,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'title, size, price,',
        ],
    ]
];
