<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3Incubator\Reservations\Hooks\DataHandlerHook;

defined('TYPO3') or die();

ExtensionManagementUtility::addTypoScriptSetup(
    trim('
        module.tx_form {
            settings {
                yamlConfigurations {
                    120 = EXT:reservations/Configuration/Form/Setup.yaml
                }
            }
        }
    ')
);

// Register DataHandlerHook for sending emails when a reservation is accepted
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DataHandlerHook::class;
