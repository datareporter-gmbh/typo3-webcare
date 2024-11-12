<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die('Access denied.');

$newContentElements = [
    [
        'label' => 'LLL:EXT:webcare/Resources/Private/Language/locallang.xlf:privacyStatement',
        'value' => 'privacy_statement',
        'icon' => 'content-text',
        'group' => 'special',
        'description' => 'LLL:EXT:webcare/Resources/Private/Language/locallang.xlf:privacy_statement_wizard_description',
    ],
    [
        'label' => 'LLL:EXT:webcare/Resources/Private/Language/locallang.xlf:imprint',
        'value' => 'imprint',
        'icon' => 'content-text',
        'group' => 'special',
        'description' => 'LLL:EXT:webcare/Resources/Private/Language/locallang.xlf:imprint_wizard_description',
    ],
];

foreach ($newContentElements as $newContentElement) {
    ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType', $newContentElement);
}
