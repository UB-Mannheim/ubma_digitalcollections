<?php
defined('TYPO3_MODE') or die();

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Slub.SlubDigitalcollections',
    'SingleCollection',
    'LLL:EXT:ubma_digitalcollections/Resources/Private/Language/locallang.xlf:plugins.single_collection_view'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['slubdigitalcollections_singlecollection'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('slubdigitalcollections_singlecollection', 'FILE:EXT:ubma_digitalcollections/Configuration/Flexforms/SingleCollection.xml');
