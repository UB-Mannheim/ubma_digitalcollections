<?php
defined('TYPO3_MODE') or die();

call_user_func(function()
{
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile (
        'ubma_digitalcollections',
        'Configuration/TsConfig/All.tsconfig',
        'UBMA Digital Collections: Page TS incl. Backend Layouts'
    );
});
