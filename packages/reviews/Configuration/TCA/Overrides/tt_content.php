<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function (): void {
    ExtensionUtility::registerPlugin(
        'Reviews',
        'ListReviews',
        'LLL:EXT:reviews/Resources/Private/Language/locallang_be.xlf:plugin.reviews',
    );

    ExtensionUtility::registerPlugin(
        'Reviews',
        'CreateReviews',
        'LLL:EXT:reviews/Resources/Private/Language/locallang_be.xlf:plugin.createReviews',
    );
})();
