<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_Course extends Kacela_Model
{

	public function get_form(array $fields = array())
	{
		$form = parent::get_form($fields);

		$teachers = Kacela::find_all('teacher');

		$options = array();
		foreach($teachers as $teach)
		{
			$options[$teach->id] = $teach->full_name;
		}

		$form->wizard_id->set
		(
			array
			(
				'driver'  => 'select',
				'value'   => $this->wizard_id,
				'opts' => $options,
				'label'   => 'Teacher'
			)
		);

		$form->remove(array('id'));

		return $form;
	}
}
