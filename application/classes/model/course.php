<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_Course extends Model
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$options = \Formo::select_list(\kacela::find_all('teacher')->as_array('full_name', 'id'));

		$form->wizard_id->set
		(
			array
			(
				'driver'  => 'select',
				'value'   => $this->wizard_id,
				'options' => $options,
				'label'   => 'Teacher'
			)
		);

		$form->remove(array('id'));

		return $form;
	}
}
