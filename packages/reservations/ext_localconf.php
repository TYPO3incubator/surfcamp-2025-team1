<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3Incubator\Reservations\Controller\ReservationController;

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
        plugin.tx_form {
            settings {
                yamlConfigurations {
                    120 = EXT:reservations/Configuration/Form/Setup.yaml
                }
            }
        }
    ')
);
