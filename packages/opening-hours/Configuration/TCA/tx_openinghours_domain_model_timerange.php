<?php

declare(strict_types=1);

use TYPO3Incubator\OpeningHours\Utility\TcaUtility;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_timerange',
        'label' => 'start_time',
        'label_userFunc' => TcaUtility::class . '->timeRangeTitle',
        'default_sortby' => 'start_time',
        'delete' => 'deleted',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'hideTable' => true,
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'iconfile' => 'EXT:opening_hours/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '0' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                start_time, end_time,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden, starttime, endtime
            ',
        ],
    ],
    'columns' => [
        'start_time' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_timerange.startTime',
            'config' => [
                'type' => 'datetime',
                'format' => 'time',
                'required' => true,
            ],
        ],
        'end_time' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_timerange.endTime',
            'config' => [
                'type' => 'datetime',
                'format' => 'time',
                'required' => true,
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
