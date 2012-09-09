<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Model_Wizard extends Model
{
	protected function _get_full_name()
	{
		return $this->fname.' '.$this->lname;
	}

	protected function _set_full_name($value)
	{
		$value = trim($value);
		$this->fname = trim(substr($value, 0, strpos($value, ' ')));
		$this->lname = trim(substr($value, strpos($value, ' ')));
	}

	public function get_form($name = null)
	{
		$form = parent::get_form($name)
			->remove(array('address_id', 'id', 'fname', 'lname'))
			->add('full_name', array('value' => $this->full_name, 'required' => true, 'label' => 'full name'));

		return $form;
	}
}
