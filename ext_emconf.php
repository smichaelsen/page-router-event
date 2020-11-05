<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Router Event',
    'description' => 'Sends the missing UriIsGenerated PSR-14 event from the PageRouter',
    'category' => 'frontend',
    'author' => 'Sebastian Michaelsen',
    'author_email' => 'sebastian@michaelsen.io',
    'state' => 'stable',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
    ],
];
