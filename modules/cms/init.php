<?php
/**
 * @user: noah
 * @date 1/19/13
 */

$config = Kohana::$config->load('cms');

try
{
	if($_SERVER['REQUEST_URI'] != '/cms/install')
	{
		$source = Kacela::instance()->get_datasource('cms');
		$source->loadResource('content');
	}

}
catch(Exception $e)
{
	Request::factory('/cms/install')
		->redirect('/cms/install');
}

Route::set('install', 'cms/install')
	->defaults
	(
		array(
			'controller' => 'install',
			'directory' => 'cms',
			'action' => 'index'
		)
	);

Route::set('blog', $config->routes['blog'])
	->defaults
	(
		array
		(
			'directory' => 'cms',
			'controller' => 'blog',
			'action' => 'index'
		)
	);

Route::set('pages', $config->routes['pages'])
	->defaults
	(
		array
		(
			'directory' => 'cms',
			'controller' => 'page',
			'action' => 'index'
		)
	);

Route::set('cms/admin', $config->routes['admin'])
	->defaults
	(
		array
		(
			'directory' => 'cms/admin',
			'controller' => 'index',
			'action' => 'index'
		)
	);