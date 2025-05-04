<?php

return [
    'ctrl' => [
        'title' => 'Weather Data',
        'label' => 'temp',
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
        'searchFields' => 'humidity,temp,alarm,brightness',
        'iconfile' => 'EXT:surfcampbase/Resources/Public/Icons/tx_surfcampbase_domain_model_weatherdata.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'humidity, temp, alarm, brightness'],
    ],
    'columns' => [
        'humidity' => [
            'exclude' => true,
            'label' => 'Humidity (%)',
            'config' => [
                'type' => 'input',
                'eval' => 'double',
                'default' => 0.0,
            ],
        ],
        'temp' => [
            'exclude' => true,
            'label' => 'Temperature (°C)',
            'config' => [
                'type' => 'input',
                'eval' => 'double',
                'default' => 0.0,
            ],
        ],
        'alarm' => [
            'exclude' => true,
            'label' => 'Alarm',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
            ],
        ],
        'brightness' => [
            'exclude' => true,
            'label' => 'Brightness (percentage)',
            'config' => [
                'type' => 'input',
                'eval' => 'double',
                'default' => 0.0,
            ],
        ],
    ],
];
