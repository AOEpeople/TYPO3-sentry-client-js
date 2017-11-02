<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Register static TypoScript templates
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'sentry_client_js',
    'Configuration/TypoScript',
    'Client-side error reporting with Sentry'
);
