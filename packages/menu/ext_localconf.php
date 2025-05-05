<?php

declare(strict_types=1);

use TYPO3Incubator\Menu\Controller\MenuController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'Menu',
    'ListMenu',
    [MenuController::class => 'list'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
