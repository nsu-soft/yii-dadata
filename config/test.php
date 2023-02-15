<?php

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'library-tests',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['dadata'],
    'language' => 'ru-RU',
    'components' => [
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
        ],
    ],
    'modules' => [
        'dadata' => [
            'class' => 'nsusoft\dadata\Module',
            'token' => '',
            'secret' => '',
        ],
    ],
];