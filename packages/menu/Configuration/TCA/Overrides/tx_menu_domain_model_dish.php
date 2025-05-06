<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$dishTable = 'tx_menu_domain_model_dish';

$GLOBALS['TCA'][$dishTable]['columns']['categories'] = [
    'config' => [
        'type' => 'category',
    ],
];

ExtensionManagementUtility::addToAllTCAtypes(
    $dishTable,
    'categories'
);
