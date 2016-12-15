<?php

$params = require(__DIR__ . '/params.php');
$config = [
    'language' => 'FR',
    'sourceLanguage' => 'fr-FR',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'languagepicker' => [
            'class' => 'lajax\languagepicker\Component',
            'languages' => ['EN' => 'English', 'DE' => 'Deutsch', 'FR' => 'Français']
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => [
                            'app' => 'app.php',
                        ],
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'g47_JIzezeNavqN8ertertiFi4h_iRf',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
                'showScriptName' => false,
                'enablePrettyUrl' => false,
                'rules' => [
                        'index' => 'site/index',
			'contact' => 'site/contact',
                        'apropos' => 'site/apropos',
                        'solutions' => 'site/solutions',
                        'expertises' => 'site/expertises',
                    
                        'articles' => 'site/articles',
                        'login' => 'site/login',
			'etudeanalyse' => 'site/etudeanalyse',
			'engagements' => 'site/engagements',
			'dg' => 'site/dg',
			'logos' => 'site/logos',

     			//Marques
                        'maghribup' => 'site/maghribup',
                        'angsite' => 'site/angsite',
                        'pmestarter' => 'site/pmestarter',
                        'smsdaba' => 'site/smsdaba',
                        'maronethelp' => 'site/maronethelp',
                        'nasna' => 'site/nasna',
                        'numerini' => 'site/numerini',

			//Formations
			'formations' => 'site/formations',
			'references' => 'site/references',

                        'POST <controller:[\w-]+>s' => '<controller>/create',
                        '<controller:[\w-]+>s' => '<controller>/index',

                        'PUT <controller:[\w-]+>/<id:\d+>'    => '<controller>/update',
                        'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
                        '<controller:[\w-]+>/<id:\d+>'        => '<controller>/view',
                ]
        ],
    ],
    'as beforeRequest' => [
    'class' => 'app\components\LanguageHandler',
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

}
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];

return $config;
