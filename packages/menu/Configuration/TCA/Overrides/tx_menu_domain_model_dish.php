<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$myTable = 'tx_menu_domain_model_dish';

$GLOBALS['TCA'][$myTable]['columns']['categories'] = [
    'config' => [
        'type' => 'category',
    ],
];

ExtensionManagementUtility::addToAllTCAtypes(
    $myTable,
    'categories'
);