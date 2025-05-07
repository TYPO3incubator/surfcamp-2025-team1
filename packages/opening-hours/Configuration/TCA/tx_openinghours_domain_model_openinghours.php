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
                --palette--;;monday,
                --palette--;;tuesday,
                --palette--;;wednesday,
                --palette--;;thursday,
                --palette--;;friday,
                --palette--;;saturday,
                --palette--;;sunday,
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
        'monday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.monday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'tuesday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.tuesday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'wednesday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.wednesday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'thursday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.thursday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'friday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.friday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'saturday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.saturday',
                    ],
                ],
            ],
            'onChange' => 'reload',
        ],
        'sunday' => [
            'description' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.description',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'label' => 'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.sunday',
                    ],
                ],
            ],
            'onChange' => 'reload',
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
            'displayCond' => 'FIELD:monday:REQ:true',
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
            'displayCond' => 'FIELD:tuesday:REQ:true',
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
            'displayCond' => 'FIELD:wednesday:REQ:true',
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
            'displayCond' => 'FIELD:thursday:REQ:true',
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
            'displayCond' => 'FIELD:friday:REQ:true',
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
            'displayCond' => 'FIELD:saturday:REQ:true',
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
