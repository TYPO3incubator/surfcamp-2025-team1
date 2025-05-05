<?php

declare(strict_types=1);

$GLOBALS['TCA']['tx_opening_hours_opening_hours'] = [
    'ctrl' => [
        'title' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour',
        'label' => 'uid',
        'default_sortby' => 'ORDER BY uid',
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
            'showitem' => '--div--;palette,
                    --palette--;;monday,palette,--palette--;;tuesday, palette,--palette--;;wednesday, palette,--palette--;;thursday,palette,--palette--;; friday, palette,--palette--;;saturday, palette,--palette--;;sunday',
        ],
    ],
    'columns' => [
        'monday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.monday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'tuesday' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.tuesday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'wednesday' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.wednesday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'thursday' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.thursday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'friday' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.friday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'saturday' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.saturday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'sunday' => [
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.sunday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'time_ranges_monday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'monday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:monday:REQ:true',
        ],
        'time_ranges_tuesday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'tuesday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:tuesday:REQ:true',
        ],
        'time_ranges_wednesday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'wednesday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:wednesday:REQ:true',
        ],
        'time_ranges_thursday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'thursday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:thursday:REQ:true',
        ],
        'time_ranges_friday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'friday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:friday:REQ:true',
        ],
        'time_ranges_saturday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'saturday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:saturday:REQ:true',
        ],
        'time_ranges_sunday' => [
            'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_opening_hours_opening_hour.timeRanges',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_opening_hours_time_range',
                'foreign_field' => 'content_element',
                'foreign_match_fields' => [
                    'weekday' => 'sunday',
                ],
                'maxitems' => 2,
            ],
            'displayCond' => 'FIELD:sunday:REQ:true',
        ],
    ],
    'palettes' => [
        'monday' => [
            'showitem' => 'monday, --linebreak--, time_ranges_monday',
        ],
        'tuesday' => [
            'showitem' => 'tuesday, --linebreak--, time_ranges_tuesday',
        ],
        'wednesday' => [
            'showitem' => 'wednesday, --linebreak--, time_ranges_wednesday',
        ],
        'thursday' => [
            'showitem' => 'thursday, --linebreak--, time_ranges_thursday',
        ],
        'friday' => [
            'showitem' => 'friday, --linebreak--, time_ranges_friday',
        ],
        'saturday' => [
            'showitem' => 'saturday, --linebreak--, time_ranges_saturday',
        ],
        'sunday' => [
            'showitem' => 'sunday, --linebreak--, time_ranges_sunday',
        ],
    ],
];
