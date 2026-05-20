<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['artmediagallery12'] = 'EXT:artmediagallery12/Configuration/RTE/MyFull.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:artmediagallery12/Configuration/TsConfig/Page/All.tsconfig">');
