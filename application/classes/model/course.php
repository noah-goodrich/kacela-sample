<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Model;

class Course extends Model
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$options = \kacela::find_all('teacher')->as_array('id', 'full_name');
		
		$form->wizard_id->set
		(
			array
			(
				'driver' => 'select',
				'value' => $this->wizard_id,
				'options' => $options,
				'label' => 'Teacher'
			)
		);

		//$form->order('subject', );

		return $form;
	}
}
