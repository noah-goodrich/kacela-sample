<?php
/** 
 * @author noahg
 * @date 6/17/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Crud extends Controller
{
	public function action_index()
	{
		$wizards = Kacela::find_all('wizard');

		//exit(\Debug::vars(Kacela::load('wizard')->debug()));

		foreach($wizards as $wizard)
		{
			echo $wizard->lname.' <a href="/crud/edit/'.$wizard->id.'">Edit</a><br/>';
		}
	}
	
	public function action_edit($id)
	{
		$wizard = Kacela::find('wizard', $id);

		$form = $wizard->get_form('wizard')
			->add('save', 'submit');

		if ($form->load($_POST)->validate(true))
		{
			$values = $form->as_array('value');
	
			echo ($wizard->save($wizard->filter_values($values)))
				? '<p>Wizard saved</p>'
				: '<p>Wizard save error</p>';
		}

		$this->response->body($form->render());
	}

}
