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
		
		$house_mapper = \Gacela::instance()->loadMapper('house');

		$house_mapper->findAll();

		$student_mapper = \Gacela::instance()->loadMapper('student');

		$this->template->content = View::factory('debug')
										->set('house_mapper', $house_mapper)
										->set('student_mapper', $student_mapper);
	}
}
