<?php
defined('TYPO3') || die('Access denied.');

if ((new \TYPO3\CMS\Core\Information\Typo3Version())->getMajorVersion() < 13) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:webcare/Configuration/TsConfig/Page/cewizard.tsconfig">'
    );
}
