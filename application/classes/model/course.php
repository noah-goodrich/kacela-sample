<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_Course extends Model
{

	public function get_form(array $fields = array())
	{
		$form = parent::get_form();

		$options = Formo::select_list(Kacela::find_all('teacher')->as_array('full_name', 'id'));

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
