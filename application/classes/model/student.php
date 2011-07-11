<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Model;

class Student extends Wizard
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove(array('house_id', 'role'));

		$houses = \kacela::find_all('house');

		$options = array();
		foreach($houses as $house)
		{
			$options[$house->name] = $house->id;
		}
		
		$form->add_group('house_id', 'select', $options, $this->house_id, array('required' => true))
			->add('role', 'hidden', 'student');

		$form->is_da_member->set('required', false);

		return $form;
	}
}
