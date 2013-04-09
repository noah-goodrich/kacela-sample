<?php
/**
 * @author Noah Goodrich
 * @date 7/8/11
 * @brief
 *
*/

class Controller_Inheritance_Single extends Controller_Site
{

	public function action_index()
	{
		$this->title = 'Single Table Inheritance Example';

		$teachers = \kacela::find_all('teacher');

		$this->template->content = View::factory('inheritance/single/index')
				->set('teachers', $teachers);
	}

	public function action_form()
	{
		$this->title = 'Single Table Inheritance Form Example';

		$teacher = kacela::find('teacher', $this->request->param('id'));

		$form = $teacher->get_form()
			->add('save', 'input|submit');

		$this->template->content = View::factory('inheritance/single/form')
										->set('form', $form);

		if (!$form->load()->validate())
		{
			return;
		}

		if (!$teacher->save($form))
		{
			$form->error(join('<br/>', array_flip($teacher->errors)));
			return;
		}

		static::redirect('/inheritance_single');
	}

	public function action_delete()
	{
		$teacher = kacela::find('teacher', $this->request->param('id'));

		$teacher->delete();

		static::redirect('/inheritance_single');
	}
}
