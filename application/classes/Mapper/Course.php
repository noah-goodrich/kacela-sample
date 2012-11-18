<?php
/**
 * @author noah
 * @date 4/23/11
 * @brief
 *
*/

class Mapper_Course extends Kacela_Mapper
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
