<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'gii'=>'gii',
				'gii/<controller:\w+>'=>'gii/<controller>',
				'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
			]
		]
	],
	'modules'=> [
		/*'gii'=> [
			'class'=>'system.gii.GiiModule',
            'password'=>'borabora',
            'ipFilters'=> ['127.0.0.1','192.168.0.250'], */
            // 'newFileMode'=>0666,
            // 'newDirMode'=>0777, 
		]
	],
];
