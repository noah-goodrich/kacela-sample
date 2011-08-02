<?php
/** 
 * @author noahg
 * @date 6/17/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Crud extends Controller_Site
{
	public function action_index()
	{
		$this->title = "Create, Read, Update, Delete Example";

		$houses = kacela::find_all('house');

		$this->template->content = View::factory('crud/index')
										->set('houses', $houses);
	}
	
	public function action_form($id = null)
	{
		$this->title = "Basic CRUD Form Example";

		$house = kacela::find('house', $id);

		$form = $house->get_form()
			->remove(array('id'))
			->add('save', 'submit');

		$this->template->content = $form->render();

		if(!$form->load()->validate())
		{
			return;
		}

		if(!$house->save($form))
		{
			exit(\Debug::vars($house->errors));
			return;
		}

		$this->request->redirect('/crud');
	}

	public function action_delete($id)
	{
		$house = kacela::find('house', $id);

		$house->delete();

		$this->request->redirect('/crud');
	}
}
