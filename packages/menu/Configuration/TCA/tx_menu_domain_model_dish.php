<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:dish.title',
        'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:dish.label',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'searchFields' => 'title',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'translationSource' => 'l10n_source',
    ],
    'columns' =>[
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:dish.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:dish.description',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
            ],
        ],
        'price' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:dish.price',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'default' => 0.00,
                'min' => 0.00,
                'required' => true,
            ],
        ],
    ],
];