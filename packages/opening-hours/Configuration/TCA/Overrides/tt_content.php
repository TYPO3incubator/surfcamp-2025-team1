<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (): void {
    $pluginName = ExtensionUtility::registerPlugin(
        'OpeningHours',
        'OpeningHours',
        'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.pluginTitle',
        'tx-opening-hours-svgicon',
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'pages',
        $pluginName,
        'after:header'
    );
})();

(static function (): void {
    $pluginName = ExtensionUtility::registerPlugin(
        'OpeningHours',
        'CompanyVacation',
        'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_companyvacation.pluginTitle',
        'tx-opening-hours-svgicon',
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'pages',
        $pluginName,
        'after:header'
    );
})();
