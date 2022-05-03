<?php
defined('TYPO3_MODE') or die();

// Add default Typoscript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ubma_digitalcollections',
    'Configuration/TypoScript',
    'UBMA Digital Collections'
);

// Add optional SitePackage Typoscript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ubma_digitalcollections',
    'Configuration/TypoScript/SitePackage',
    'Optional Sitepackage for pure usage of UBMA Digital Collections.'
);
