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

		$form->remove(array('role'))
			->add('role', 'hidden', 'teacher');

		return $form;
	}
}
