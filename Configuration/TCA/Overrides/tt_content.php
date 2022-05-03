<?php
defined('TYPO3_MODE') or die();

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Ubma.UbmaDigitalcollections',
    'SingleCollection',
    'LLL:EXT:ubma_digitalcollections/Resources/Private/Language/locallang.xlf:plugins.single_collection_view'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['ubmadigitalcollections_singlecollection'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('ubmadigitalcollections_singlecollection', 'FILE:EXT:ubma_digitalcollections/Configuration/Flexforms/SingleCollection.xml');
