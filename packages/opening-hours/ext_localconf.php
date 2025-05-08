<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3Incubator\OpeningHours\Controller\CompanyVacationController;
use TYPO3Incubator\OpeningHours\Controller\OpeningHoursController;

defined('TYPO3') or die('Access denied.');

ExtensionUtility::configurePlugin(
    'OpeningHours',
    'OpeningHours',
    [
        OpeningHoursController::class => 'index',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'OpeningHours',
    'CompanyVacation',
    [
        CompanyVacationController::class => 'index',
    ],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
