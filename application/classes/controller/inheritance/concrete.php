<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Inheritance_Concrete extends Controller_Site
{
	public function action_index()
	{
		$this->title = 'Concrete Inheritance Example';

		$students = Kacela::find_all('student');

		$this->template->content = View::factory('inheritance/concrete/index')
										->set('students', $students);
	}

}
