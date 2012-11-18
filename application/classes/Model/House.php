<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_House extends Kacela_Model
{

	public function get_form(array $fields = array())
	{
		$form = parent::get_form($fields);

		$form->remove(array('id'));

		return $form;
	}
}
