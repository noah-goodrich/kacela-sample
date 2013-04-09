<?php
/**
 * @author noahg
 * @date 7/7/11
 * @brief
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Belongsto extends Controller_Site
{
	public function action_index()
	{
		$this->title = 'Belongs To Example';

		$courses = Kacela::find_all('course');

		$this->template->content = View::factory('belongsto/index')
			->set('courses', $courses);
	}

	public function action_form()
	{
		$this->title = 'Belongs To Form Example';

		$course = kacela::find('course', $this->request->param('id'));

		$form = $course->get_form()
			->add('save', 'input|submit');

		$this->template->content = View::factory('belongsto/form')
										->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}

		if(!$course->save($form))
		{
			return;
		}

		$this->request->redirect('/belongsto');
	}

	public function action_delete()
	{
		$course = kacela::find('course', $this->request->param('id'));

		$course->delete();

		$this->request->redirect('/belongsto');
	}
}
