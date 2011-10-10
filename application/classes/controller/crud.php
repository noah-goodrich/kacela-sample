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
	
	public function action_form()
	{
		$this->title = "Basic CRUD Form Example";

		$house = kacela::find('house', $this->request->param('id'));

		$form = $house->get_form()
			->add('save', 'submit');
		
		$this->template->content = View::factory('crud/form')
										->set('form', $form);
		
		if(!$form->load()->validate())
		{
			return;
		}
		
		if(!$house->save($form))
		{
			$form->error(join('<br/>', array_flip($teacher->errors)));
			return;
		}

		$this->request->redirect('/crud');
	}

	public function action_delete()
	{
		$house = kacela::find('house', $this->request->param('id'));

		$house->delete();

		$this->request->redirect('/crud');
	}
}
