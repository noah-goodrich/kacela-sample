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

		$form->remove(array('house_id'));

		$houses = \kacela::find_all('house');

		$options = array();
		foreach($houses as $house)
		{
			$options[$house->id] = $house->name;
		}

		//$form->add('house_id', 'select', $options, $this->house_id);

		return $form;
	}
}
