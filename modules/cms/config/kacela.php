<?php
/**
 * @author noahg
 * @date 6/16/11
 * @brief
 *
 */
 defined('SYSPATH') OR die('No direct access allowed.');

/**
 *
 */

$config = Kohana::$config->load('cms');

return array
(
	'datasources' => array
	(
		'cms' => array
		(
			'type' => 'mysql',
			'schema' => $config->kacela['schema'],
			'host' => $config->kacela['host'],
			'user' => $config->kacela['user'],
			'password' => $config->kacela['password']
		)
	)
);
