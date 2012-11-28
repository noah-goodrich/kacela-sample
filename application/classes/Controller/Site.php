<?php
/**
 * @author noahg
 * @date 7/6/11
 * @brief
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Site extends Controller_Template
{

	public $template = 'h5bp';

	public $title = null;

	public function before()
	{
		\Kohana::$profiling = false;

		parent::before();

		$assets = Assets::factory()
			->css('bootstrap', 'bootstrap.less')
			->css('site', 'site.less')
			->import_dirs(APPPATH.'assets/less/');

		// Make $title available to all views
		View::bind_global('title', $this->title);
		View::bind_global('assets', $assets);
	}
}
