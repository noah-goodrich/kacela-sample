<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Mapper_Wizard extends Mapper
{
	protected $_dependents = array('address');

	protected function _load(\stdClass $data)
	{
		$class = get_class($this);

		$role = isset($data->role) ? $data->role : '';

		if($role == 'student' AND $class != 'Mapper_Student')
		{
			// Because students load from their mapper that allows them to inherit
			// from the wizards resource
			return Kacela::find('student', $this->_primaryKey($this->_resource->getPrimaryKey(), $data));
		}

		if(!empty($data->role)) {
			$model = 'Model_'.ucfirst($data->role);
		} else {
			$model = str_replace('Mapper', 'Model', $class);
		}

		return new $model($this->_kacela(), $this, $data);
	}
}
