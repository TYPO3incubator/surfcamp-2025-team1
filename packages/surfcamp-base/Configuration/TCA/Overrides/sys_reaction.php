<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (ExtensionManagementUtility::isLoaded('reactions')) {
    ExtensionManagementUtility::addTcaSelectItem(
        'sys_reaction',
        'table_name',
        [
            'label' => 'Weather Data',
            'value' => 'tx_surfcampbase_domain_model_weatherdata',
            'icon' => '',
        ]
    );
}
