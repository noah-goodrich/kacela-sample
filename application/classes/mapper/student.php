<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Mapper;

class Student extends Mapper {

	protected $_dependents = array('address');

	/*protected $_inherits = array(
		'wizard' => array(
			'meta' => array(
				'keyTable' => 'students',
				'refTable' => 'wizards',
				'type' => 'belongsTo',
				'keys' => array('id' => 'id')
			),
			'resource' => 'wizards'
		)
	);*/
}
