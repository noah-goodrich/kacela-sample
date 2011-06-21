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
	'datasources' => array
	(
		'db' => array
		(
			'type' => 'database',
			'dbtype' => 'mysql',
			'schema' => 'kacela',
			'host' => 'localhost',
			'user' => 'kacela',
			'password' => 'kacela'
		)
	),
	'cache' => false
);
