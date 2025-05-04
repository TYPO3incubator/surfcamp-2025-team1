<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3Incubator\SurfcampBase\Controller\WeatherDataController;

defined('TYPO3') or die('Access denied.');

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['surfcamp_base'] = 'EXT:surfcamp_base/Configuration/RTE/Default.yaml';

ExtensionUtility::configurePlugin(
    'SurfcampBase',
    'IndexWeatherData',
    [WeatherDataController::class => 'index'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);
