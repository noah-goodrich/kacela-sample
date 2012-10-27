<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_Student extends Model_Wizard
{

	public function get_form(array $fields = array())
	{
		$houses = \kacela::find_all('house');

		$form = parent::get_form($fields)
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
