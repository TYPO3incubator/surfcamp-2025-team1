<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function (): void {
    $pluginKey = ExtensionUtility::registerPlugin(
        'Reservations',
        'ReservationForm',
        'LLL:EXT:reservations/Resources/Private/Language/locallang_be.xlf:plugin.reservationForm',
    );
})();
