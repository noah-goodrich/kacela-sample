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

		$id = $this->request->param('id');

		if (is_null($id)) {
			$teachers = kacela::find_all('teacher');

			$this->template->content = View::factory('hasmany/index')
					->set('teachers', $teachers);
		}
		else
		{
			$teacher = kacela::find('teacher', $id);

			$form = Formo::form('new_course')
					->add('wizard_id', 'hidden', $teacher->id)
					->add('subject')
					->add('Add', 'submit');

			if ($form->load()->validate()) {
				$course = kacela::find('course');

				$course->save($form);
			}

			$this->template->content = View::factory('hasmany/courses')
					->set('teacher', $teacher)
					->set('form', $form);
		}
	}

	public function action_remove()
	{
		$course = Kacela::find('course', $this->request->param('id'));

		$wizard = $course->wizard_id;

		$course->delete();

		$this->request->redirect('/hasmany/index/'.$wizard);
	}
}
