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

	public function action_form($id = null)
	{
		$this->title = 'Concrete Inheritance Form Example';

		$student = kacela::find('student', $id);

		$form = $student->get_form();

		$form->add('Save', 'submit');

		$this->template->content = View::factory('inheritance/concrete/form')
									->set('form', $form);
									
		if(!$form->load()->validate())
		{
			return;
		}

		if(!$student->save($form))
		{
			$form->error(join('<br/>', array_flip($student->errors)));

			return;
		}

		$this->request->redirect('/inheritance_concrete');
	}

	public function action_delete($id)
	{
		$student = kacela::find('student', $id);

		$student->delete();
		
		$this->request->redirect('/inheritance_concrete');
	}
}
