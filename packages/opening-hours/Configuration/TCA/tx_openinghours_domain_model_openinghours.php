<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours',
        'label' => 'title',
        'label_alt' => 'uid',
        'sortby' => 'uid',
        'delete' => 'deleted',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
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
        'iconfile' => 'EXT:site/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '0' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.monday;palette,--palette--;;monday,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.tuesday;palette,--palette--;;tuesday,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.wednesday;palette,--palette--;;wednesday,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.thursday;palette,--palette--;;thursday,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.friday;palette,--palette--;;friday,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.saturday;palette,--palette--;;saturday,
                --div--;LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.sunday;palette,--palette--;;sunday,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden, starttime, endtime
            ',
        ],
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'time_ranges_monday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'monday',
                ],
                'maxitems' => 2,
            ],
        ],
        'time_ranges_tuesday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'tuesday',
                ],
                'maxitems' => 2,
            ],
        ],
        'time_ranges_wednesday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'wednesday',
                ],
                'maxitems' => 2,
            ],
        ],
        'time_ranges_thursday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'thursday',
                ],
                'maxitems' => 2,
            ],
        ],
        'time_ranges_friday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'friday',
                ],
                'maxitems' => 2,
            ],
        ],
        'time_ranges_saturday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'saturday',
                ],
                'maxitems' => 2,
            ],
        ],
        'time_ranges_sunday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_openinghours_domain_model_timerange',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'sunday',
                ],
                'maxitems' => 2,
            ],
        ],
    ],
    'palettes' => [
        'monday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.monday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_monday',
        ],
        'tuesday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.tuesday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_tuesday',
        ],
        'wednesday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.wednesday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_wednesday',
        ],
        'thursday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.thursday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_thursday',
        ],
        'friday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.friday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_friday',
        ],
        'saturday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.saturday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_saturday',
        ],
        'sunday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.sunday',
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'showitem' => 'time_ranges_sunday',
        ],
    ],
];
