<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Dependents extends Controller
{
	public function action_index()
	{
		$models = kacela::find_all('wizard');



		$this->response->body(View::factory('dependents')->set('models', $models));

	}

	public function action_form()
	{
		$form = kacela::find('wizard')->get_form();

		$form->remove(array('id', 'address_id'));

		$this->response->body($form->render());

		if(!$form->validate())
		{
			return;
		}

	}
}
