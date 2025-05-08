<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_db.xlf:tx_reservations_domain_model_reservation.reservation',
        'label' => 'reservation_time',
        'default_sortby' => 'reservation_time',
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
        ],
        'searchFields' => 'first_name,last_name,email,telephone,reservation_time',
        'iconfile' => 'EXT:site/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                first_name, last_name, number_of_persons, telephone, email, reservation_time,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden
            '
        ],
    ],
    'columns' => [
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
