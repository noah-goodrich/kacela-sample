<?php
/** 
 * @author Noah Goodrich
 * @date 7/13/11
 * @brief
 * 
*/

class Controller_Associations extends Controller_Site
{

	public function action_index()
	{
		$this->title = 'Association Relationships Example';

		$students = kacela::find_all('student');
		
		$this->template->content = View::factory('associations/index')
									->set('students', $students);
	}

	public function action_student($id)
	{
		$this->title = 'Association Relationships Example';

		$student = kacela::find('student', $id);
		
		$ids = $student->courses->as_array('id');

		$criteria = kacela::criteria()->notIn('id', $ids);

		$new = kacela::find_all('course', $criteria);
		
		$form = Formo::form()
					->add('wizard_id', 'hidden', $student->id)
					->add_group('course_id', 'select', Formo::select_list($new->as_array('subject', 'id')))
					->add('Add', 'submit');

		if($form->load()->validate())
		{
			$course = kacela::find('course', $form->course_id->val());

			$student->add($course);
		}

		$this->template->content = View::factory('associations/student')
									->set('student', $student)
									->set('form', $form);
	}

	public function action_remove($student_id, $course_id)
	{
		$student = kacela::find('student', $student_id);

		$course = kacela::find('course', $course_id);

		$student->remove($course);

		$this->action_student($student_id);
	}
}
