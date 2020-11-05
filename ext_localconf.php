<?php

// Replace PageRouter
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Routing\PageRouter::class] = [
    'className' => \Smic\PageRouterEvent\Xclass\PageRouter::class,
];
