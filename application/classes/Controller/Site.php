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

	public $title = null;

	public function before()
	{
		\Kohana::$profiling = false;

		parent::before();

		// Make $title available to all views
		View::bind_global('title', $this->title);
	}
}
