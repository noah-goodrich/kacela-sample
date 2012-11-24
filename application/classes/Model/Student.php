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
			->set(array(
				'house_id' => array
				(
					'driver'   => 'select',
					'opts'  => Arr::select_options($houses, 'id', 'name'),
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
