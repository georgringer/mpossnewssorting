<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');
$tempColumns = [
    "sorting" => [
        "config" => [
            "type" => "passthrough",
        ]
    ],
];

$GLOBALS['TCA']["tt_news"]['ctrl']['sortby'] = 'sorting';
unset($GLOBALS['TCA']['tt_news']['ctrl']['default_sortby']);


//if ($version == 1) {
//    $confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['tt_news']);
//     switch the XML files for the FlexForm depending on if "use StoragePid"(general record Storage Page) is set or not.
//    if ($confArr['useStoragePid']) {
//        t3lib_extMgm::addPiFlexFormValue(9, 'FILE:EXT:mpossnewssorting/flexform_ds2.xml');
//    } else {
//        t3lib_extMgm::addPiFlexFormValue(9, 'FILE:EXT:mpossnewssorting/flexform_ds2_no_sPID.xml');
//    }
//
//} else {
//    t3lib_extMgm::addPiFlexFormValue(9, 'FILE:EXT:mpossnewssorting/flexform_ds.xml');
//}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns("tt_news", $tempColumns, 1);