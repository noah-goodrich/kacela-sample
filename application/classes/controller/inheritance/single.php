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

	public function action_form($id = null)
	{
		$this->title = 'Single Table Inheritance Form Example';

		$teacher = kacela::find('teacher', $id);

		$form = $teacher->get_form()
			->add('save', 'submit');

		$this->template->content = View::factory('inheritance/single/form')
										->set('form', $form);

		if (!$form->load()->validate())
		{
			return;
		}

		if (!$teacher->save($form))
		{
			$form->error(join('<br/>', array_flip($student->errors)));

			return;
		}

		$this->request->redirect('/inheritance_single');
	}

	public function action_delete($id)
	{
		$teacher = kacela::find('teacher', $id);

		$teacher->delete();

		$this->request->redirect('/inheritance_single');
	}
}
