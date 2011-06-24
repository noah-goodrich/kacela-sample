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

		$view = View::factory('dependents')
					->set('models', $models);

		$this->response->body($view);
	}

	public function action_form($id = null)
	{
		$form = kacela::find('wizard', $id)->get_form();

		$form->add('submit', 'submit');

		$this->response->body($form->render());

		if(!$form->validate())
		{
			return;
		}
	}
}
