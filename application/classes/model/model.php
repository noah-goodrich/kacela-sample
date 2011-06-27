<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */

namespace App\Model;

use Kacela\Model as K;

class Model extends K\Model
{
	protected function _formo_add_rules(\Formo_Container $form)
	{
		foreach ($form->as_array() as $alias => $val)
		{
			if ($field = \Arr::get($this->_mapper->getFields(), $alias)) {
				$rules = array();

				if ($field->null === FALSE) {
					// Add not_empty rule if it doesn't allow NULL
					$rules[] = array('not_empty');
				}

				if ($field->type == 'int') {
					$rules[] = array('digit');
				}

				if ($field->length) {
					$rules[] = array('max_length', array(':value', $field->length));
				}

				if ($field->type == 'enum') {
					$rules[] = array('in_array', array(':value', $field->values));
				}

				if ($field->type == 'date') {
					$rules[] = array('date');
				}

				if (!empty($rules)) {
					// Add rules if there are any
					$form->rules($alias, $rules);
				}

			}
		}
	}

	protected function _formo_add_fields(\Formo_Container $form)
	{
		foreach ($this->_fields as $field => $data)
		{
			switch ($data->type)
			{
				case 'enum':
					$values = $data->values;
					$form->add_group($field, 'select', array_combine($data->values, $data->values), $this->$field);
					break;
				default:
					$form->add($field, 'input', $this->$field);
			}

			if ($data->primary === TRUE) {
				$form->$field->set('editable', FALSE);
			}

		}
	}

	public function get_form($name = null)
	{
		$form = \Formo::form($name);

		$this->_formo_add_fields($form);
		$this->_formo_add_rules($form);

		return $form;
	}

	public function filter_values(array $array)
	{
		$values = array();
		foreach ($array as $field => $value)
		{
			if (property_exists($this->_data, $field) || method_exists($this, '_set_'.$field)) {
				$values[$field] = $value;
			}
		}

		return $values;
	}

	public function save($data = null)
	{
		if($data instanceof \Formo_Form)
		{
			$data = $this->filter_values($data->as_array('value'));
		}
		
		return parent::save($data);
	}
}
