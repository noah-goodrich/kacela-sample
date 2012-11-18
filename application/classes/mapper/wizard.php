<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Mapper_Wizard extends Kacela_Mapper
{

	protected $_dependents = array
	(
		'address' => array
		(
			'meta' => array
			(
				'keyTable' => 'wizards',
				'refTable' => 'addresses',
				'type' => 'belongsTo',
				'keys' => array
				(
					'address_id' => 'id'
				)
			),
			'resource' => 'addresses'
		)
	);

	protected function _load(\stdClass $data)
	{
		$class = get_class($this);

		$role = isset($data->role) ? $data->role : '';

		if($role == 'student' AND $class != 'Mapper_Student')
		{
			// Because students load from their mapper that allows them to inherit
			// from the wizards resource
			return \kacela::find('student', $this->_primaryKey($this->_resource->getPrimaryKey(), $data));
		}

		if(!empty($data->role)) {
			$model = ucfirst($data->role);
		} else {
			$model = explode("_", $class);
			$model = end($model);
		}

		$model = 'Model_'.$model;

		return new $model(Kacela::instance(), $this, $data);
	}
}
