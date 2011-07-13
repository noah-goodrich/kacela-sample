<?php
/** 
 * @author noahg
 * @date 7/12/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Hasmany extends Controller_Site
{

	public function action_index()
	{
		$this->title = 'Has Many Example';

		$teachers = kacela::find_all('teacher');

		$this->template->content = View::factory('hasmany/index')
			->set('teachers', $teachers);
	}

	public function action_form($id = null)
	{
		
	}
}
