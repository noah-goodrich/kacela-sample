<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Dependents extends Controller_Site
{

	public function action_index()
	{
		$models = kacela::find_all('wizard');

		$this->template->content = View::factory('dependents/index')
			->set('models', $models);

		$this->title = 'Dependent Relationship Example';
	}

	public function action_form($id = null)
	{
		$model = kacela::find('wizard', $id);
		
		$form = $model->get_form()
			->add('save', 'submit');

		$this->template->content = View::factory('dependents/form')->set('form', $form);

		if(!$form->load($_POST)->validate(true))
		{
			return;
		}
		
		if(!$model->save($form))
		{
			return;
		}
		
		$this->request->redirect('/dependents');
	}

	public function action_delete($id)
	{
		$model = kacela::find('wizard', $id);

		$model->delete();

		$this->request->redirect('/dependents');
	}
}
