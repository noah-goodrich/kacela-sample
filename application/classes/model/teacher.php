<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Model;

class Teacher extends Wizard
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->role->set(array(
			'driver' => 'hidden',
			'value'  => 'teacher',
		));

		return $form;
	}
}
