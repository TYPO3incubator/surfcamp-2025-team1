<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_companyvacation',
        'label' => 'start_date',
        'default_sortby' => 'ORDER BY start_date',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [],
        'iconfile' => 'EXT:site/Resources/Public/Icons/Extension.svg',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
    ],
    'types' => [
        '0' => [
            'showitem' => 'start_date, end_date',
        ],
    ],
    'columns' => [
        'start_date' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_companyvacation.startDate',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'default' => 0,
                'disableAgeDisplay' => true,
            ],
        ],
        'end_date' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_companyvacation.endDate',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'default' => 0,
                'disableAgeDisplay' => true,
            ],
        ],
    ],
];
