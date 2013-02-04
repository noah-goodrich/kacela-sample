<?php
/**
 * @user: noah
 * @date 1/19/13
 */

return array
(
	'routes' => array
	(
		'admin' => 'cms/admin(/<controller>(/<action>(/<params>)))',
		'blog' => 'blog(/<page_name>)',
		'pages' => '<page_name>'
	),
	'kacela' => array
	(
		'host' => 'localhost',
		'user' => 'kacela',
		'password' => 'kacela',
		'schema' => 'cms'
	)
);