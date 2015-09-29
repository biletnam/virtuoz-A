<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request'=>[
            'baseUrl'=>'',
        ],
        'urlManager'=>[
			'class' => 'yii\web\UrlManager',
			'rules' => [
				'gii'=>'gii',
				'gii/<controller:\w+>'=>'gii/<controller>',
				'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
			],
            'scriptUrl'=>'/index.php',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		],
    ],
	'modules'=> [
		'gii'=> [
//			'class'=>'system.gii.GiiModule',
			'class'=>'yii\gii\Module',
            'password'=>'borabora',
            'ipFilters'=> ['127.0.0.1','192.168.0.*',], 
            // 'newFileMode'=>0666,
            // 'newDirMode'=>0777, 
		],
	],
    'params' => $params,
];
