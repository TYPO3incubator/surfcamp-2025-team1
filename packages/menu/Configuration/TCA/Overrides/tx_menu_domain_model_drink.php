<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$drinkTable = 'tx_menu_domain_model_drink';

$GLOBALS['TCA'][$drinkTable]['columns']['categories'] = [
    'config' => [
        'type' => 'category',
    ],
];

ExtensionManagementUtility::addToAllTCAtypes(
    $drinkTable,
    'categories'
);
