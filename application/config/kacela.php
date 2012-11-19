<?php
/**
 * @author noahg
 * @date 6/16/11
 * @brief
 *
 */
 defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'cache' => 'kacela',
	'datasources' => array
	(
		'db' => array
		(
			'type' => 'mysql',
			'schema' => 'kacela',
			'host' => '127.0.0.1',
			'user' => 'kacela',
			'password' => 'kacela'
		),
		'employees' => array
		(
			'schema' => 'employees',
			'host' => 'localhost',
			'user' => 'gacela',
			'passwword' => 'gacela',
			'type' => 'mysql'
		)
	)
);
