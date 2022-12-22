<?php
defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Geraldib\PortfolioSite\Controller\ProjectController;

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['portfolio_site'] = 'EXT:portfolio_site/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:portfolio_site/Configuration/TsConfig/Page/All.tsconfig">');


/***************
 * Custom PLugins
 */
ExtensionUtility::configurePlugin(
    'portfolio_site',
    'ProjectList',
    [ProjectController::class => 'list',],
    [ProjectController::class => '',],
);
