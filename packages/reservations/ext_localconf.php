<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3Incubator\Reservations\Controller\ReservationController;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'Reservations',
    'ReservationForm',
    [ReservationController::class => 'form'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
