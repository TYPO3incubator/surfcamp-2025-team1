<?php

declare(strict_types=1);

$GLOBALS['TCA']['tx_opening_hours_time_range'] = [
    'ctrl' => [
        'title' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_time_range',
        'label' => 'start_time',
        'default_sortby' => 'ORDER BY start_time',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [],
        'hideTable' => 1,
        'iconfile' => 'EXT:site/Resources/Public/Icons/Extension.svg',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
    ],
    'types' => [
        '0' => [
            'showitem' => 'start_time, end_time',
        ],
    ],
    'columns' => [
        'start_time' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_time_range.startTime',
            'config' => [
                'type' => 'datetime',
                'format' => 'time',
                'default' => 0,
            ],
        ],
        'end_time' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_time_range.endTime',
            'config' => [
                'type' => 'datetime',
                'format' => 'time',
                'default' => 0,
            ],
        ],
        'content_element' => [
            'config' => [
                'type' => 'input',
            ],
        ],
        'weekday' => [
            'config' => [
                'type' => 'input',
            ],
        ],
    ],
];
