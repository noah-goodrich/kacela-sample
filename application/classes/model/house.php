<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_House extends Model
{

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$form->remove(array('id'));

		return $form;
	}
}
