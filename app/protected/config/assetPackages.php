<?php

return array(
	'base' => array(
		'basePath' => 'application.assets',
		'css' => array(
			'base.css'
		),
		'depends' => array(
			'bootstrap',
		)
	),
	'another' => array(
		'js' => array(
			// ...
		),
		'depends' => array(
			'base',
			'jquery',

		)
	)
);