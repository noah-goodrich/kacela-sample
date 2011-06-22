<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Dependents extends Controller_Template
{

	public $template = 'dependents';
	
	public function action_index()
	{
		$models = kacela::find_all('wizard');

		$form = kacela::find('wizard')->get_form();

		$this->template->models = $models;
		$this->template->form = $form;
	}
}
