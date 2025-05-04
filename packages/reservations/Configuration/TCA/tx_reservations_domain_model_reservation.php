<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.reservation',
        'label' => 'last_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'first_name,last_name,email,telephone',
        'iconfile' => 'EXT:reservations/Resources/Public/Icons/tx_reservations_domain_model_reservation.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                first_name, last_name, number_of_persons, telephone, email, reservation_time,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden
            '
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_reservations_domain_model_reservation',
                'foreign_table_where' => 'AND {#tx_reservations_domain_model_reservation}.{#pid}=###CURRENT_PID### AND {#tx_reservations_domain_model_reservation}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'first_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'last_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'number_of_persons' => [
            'exclude' => true,
            'label' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.number_of_persons',
            'config' => [
                'type' => 'input',
                'eval' => 'int,required'
            ],
        ],
        'telephone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.telephone',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,required'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.email',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,email,required'
            ],
        ],
        'reservation_time' => [
            'exclude' => true,
            'label' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.reservation_time',
            'config' => [
                'type' => 'datetime',
                'dbType' => 'datetime',
                'nullable' => true,
            ],
        ],
    ],
];
