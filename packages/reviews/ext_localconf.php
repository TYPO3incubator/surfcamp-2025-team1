<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3Incubator\Reviews\Controller\ReviewController;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'Reviews',
    'ListReviews',
    [ReviewController::class => 'list'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

ExtensionUtility::configurePlugin(
    'Reviews',
    'CreateReviews',
    [ReviewController::class => 'create'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);