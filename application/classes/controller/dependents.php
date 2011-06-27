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

		$this->response->body
		(
			View::factory('dependents')
				->set('models', $models)
		);
	}

	public function action_form($id = null)
	{
		$model = kacela::find('wizard', $id);

		$form = $model->get_form();

		$form->add('submit', 'submit');

		if(!$form->load($_POST)->validate(true))
		{
			$this->response->body
			(
				View::factory('dependents/form')->set('form', $form)
			);
			return;
		}
		
		if(!$model->save($form))
		{
			$this->response->body
			(
				View::factory('dependents/form')->set('form', $form)
			);
			return;
		}
	}
}
