<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Mapper;

class Wizard extends Mapper {

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

		if($role == 'student' AND $class != 'App\Mapper\Student')
		{
			// Because students load from their mapper that allows them to inherit
			// from the wizards resource
			return \kacela::find('student', $this->_primaryKey($this->_resource->getPrimaryKey(), $data));
		}

		if(!empty($data->role)) {
			$model = ucfirst($data->role);
		} else {
			$model = explode("\\", $class);
			$model = end($model);
		}
		
		$model = '\\App\\Model\\'.$model;

		return new $model($data);
	}
}
