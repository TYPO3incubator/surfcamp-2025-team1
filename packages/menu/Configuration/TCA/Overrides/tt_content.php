<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function (): void {
    $pluginKey = ExtensionUtility::registerPlugin(
        // extension name, matching the PHP namespaces (but without the vendor)
        'Menu',
        // arbitrary, but unique plugin name (not visible in the backend)
        'ListMenu',
        // plugin title, as visible in the drop-down in the backend, use "LLL:" for localization
        'LLL:EXT:menu/Resources/Private/Language/locallang_be.xlf:plugin.menu',
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
