<?php
defined('TYPO3') || die('Access denied.');

$newContentElements = [
    // [0] => Plugin label, [1] => Underscored extension key, [2] => Path to plugin icon relative to TYPO3_mainDir
    ['LLL:EXT:webcare/Resources/Private/Language/locallang.xlf:privacyStatement', 'privacy_statement', 'content-text'],
    ['LLL:EXT:webcare/Resources/Private/Language/locallang.xlf:imprint', 'imprint', 'content-text'],
];

foreach ($newContentElements as $newContentElement) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType', $newContentElement);
}
