<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function (): void {
    $pluginKey = ExtensionUtility::registerPlugin(
        'Menu',
        'ListMenu',
        'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:plugin.menu',
        '',
        'plugins',
        'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:plugin.menu.description'
    );

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginKey] = 'pi_flexform';

    ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        '--div--;Plugin,pi_flexform',
        $pluginKey,
    );

    ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:menu/Configuration/FlexForms/Menu.xml',
        $pluginKey,
    );
})();
