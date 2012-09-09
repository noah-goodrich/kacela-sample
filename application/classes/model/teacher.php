<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_Teacher extends Model_Wizard
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name)
			->set_all(array(
				'role' => array
				(
					'driver' => 'hidden',
					'value'  => 'teacher',
				)
			));

		return $form;
	}
}
