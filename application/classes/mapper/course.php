<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Mapper;

class Course extends Mapper
{

	protected $_associations = array(
		'students' => array(
			'meta' => array(
				'keyTable' => 'courses',
				'refTable' => 'enrollments',
				'type' => 'hasMany',
				'keys' => array('id' => 'course_id')
			),
			'resource' => 'enrollments'
		)
	);
}
