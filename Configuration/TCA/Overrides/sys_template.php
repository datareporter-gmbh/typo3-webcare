<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('webcare', 'Configuration/TypoScript/basic', 'WebCare basic settings');

if (version_compare(TYPO3_branch, '9.5', '>=')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('webcare', 'Configuration/TypoScript/cookie9', 'WebCare cookie consent');
} else {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('webcare', 'Configuration/TypoScript/cookie8', 'WebCare cookie consent');
}
