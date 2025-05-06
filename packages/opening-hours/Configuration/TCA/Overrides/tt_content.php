<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (): void {
    ExtensionUtility::registerPlugin(
        'OpeningHours',
        'OpeningHoursPlugin',
        'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_openinghours.pluginTitle'
    );
})();

(static function (): void {
    ExtensionUtility::registerPlugin(
        'OpeningHours',
        'CompanyVacationPlugin',
        'LLL:EXT:opening_hours/Resources/Private/Language/locallang_be.xlf:tx_openinghours_domain_model_companyvacation.pluginTitle'
    );
})();
