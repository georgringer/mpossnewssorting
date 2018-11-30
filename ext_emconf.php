<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Make tt_news records sortable with the sorting icons',
    'description' => 'This extension adds the sorting field to tt_news to make the records manually sortable',
    'category' => 'fe',
    'version' => '2.0.0',
    'dependencies' => '',
    'state' => 'stable',
    'author' => 'Georg Ringer',
    'author_email' => 'http://www.ringer.it',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'tt_news' => '7.6.0-7.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];