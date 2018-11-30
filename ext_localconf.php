<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'TCEFORM {
        tt_content {
            pi_flexform {
                9 {
                    sDEF {
                        listOrderBy.addItems {
                            sorting = LLL:EXT:mpossnewssorting/Resources/Private/Language/locallang_tca.xml:sorting
                        }
                    }
                }
            }
        }
    }'
);

