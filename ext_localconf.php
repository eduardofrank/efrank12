<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['efrank12'] = 'EXT:efrank12/Configuration/RTE/MyFull.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:efrank12/Configuration/TsConfig/Page/All.tsconfig">');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['yoast_seo']['allowedDoktypes']['blog'] = 137;