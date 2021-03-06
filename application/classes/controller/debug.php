<?php
/**
 * @author Noah Goodrich
 * @date 7/8/11
 * @brief
 *
*/

class Controller_Debug extends Controller_Site
{

	public function action_index()
	{
		$this->title = 'Debugging Information Example';

		$house_mapper = Kacela::load('house');

		$house_mapper->find_all();

		$student_mapper = Kacela::load('student');

		$this->template->content = View::factory('debug')
										->set('house_mapper', $house_mapper)
										->set('student_mapper', $student_mapper);
	}
}
