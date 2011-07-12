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
		$houses = \kacela::find_all('house');

		$form = parent::get_form($name)
			->set_all(array(
				'house_id' => array
				(
					'driver'   => 'select',
					'options'  => \Formo::select_list($houses->as_array('name', 'id')),
					'value'    => $this->house_id,
					'required' => true,
				),
				'role' => array
				(
					'driver' => 'hidden',
					'value'  => 'student',
				),
				'is_da_member' => array
				(
					'required' => false,
				),
			));

		return $form;
	}
}
