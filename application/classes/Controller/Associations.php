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

		$courses = kacela::find_all('course');

		$this->template->content = View::factory('associations/index')
									->set('students', $students)
									->set('courses', $courses);
	}

	public function action_course()
	{
		$course = kacela::find('course', $this->request->param('id'));

		$this->template->content = View::factory('associations/course')
									->set('course', $course);
	}

	public function action_student()
	{
		$this->title = 'Association Relationships Example';

		$student = Kacela::find('student', $this->request->param('id'));

		$ids = $student->courses->as_array('id');

		$criteria = kacela::criteria()->not_in('id', $ids);

		$new = Kacela::find_all('course', $criteria);

		$form = Formo::form()
					->add('wizard_id', 'input|hidden', $student->id)
					->add(array('alias' => 'course_id', 'driver' => 'select', 'opts' => Arr::select_options($new, 'id', 'subject'), 'label' => 'Course'))
					->add('add', 'input|submit');

		if($form->load()->validate())
		{
			$course = Kacela::find('course', $form->course_id->val());

			$student->add($course);
		}

		$this->template->content = View::factory('associations/student')
									->set('student', $student)
									->set('form', $form);
	}

	public function action_remove()
	{
		$student = kacela::find('student', $this->request->param('id'));

		$course = kacela::find('course', $this->request->param('param'));

		$student->remove($course);

		$this->action_student($this->request->param('id'));
	}
}
