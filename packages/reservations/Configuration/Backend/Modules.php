<?php

/**
 * Definitions for modules provided by EXT:reservations
 */

use TYPO3Incubator\Reservations\Controller\Backend\ReservationsController;

return [
    'web_reservations' => [
        'parent' => 'web',
        'position' => ['after' => 'web_info'],
        'access' => 'user',
        'path' => '/module/web/reservations',
        'labels' => 'LLL:EXT:reservations/Resources/Private/Language/locallang_mod_web_reservations.xlf',
        'iconIdentifier' => 'tx-reservation-svgicon',
        'routes' => [
            '_default' => [
                'target' => ReservationsController::class . '::listAction',
            ],
        ],
    ],
];
