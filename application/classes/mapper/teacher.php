<?php
/** 
 * @author noah
 * @date 4/30/11
 * 
*/

namespace App\Mapper;

class Teacher extends Wizard {

	protected $_resourceName = 'wizards';

	public function findAllWithCourse(\Gacela\Criteria $criteria = null)
	{
		$query = $this->_source()->getQuery($criteria)
					->from('wizards')
					->where('role = :role', array(':role' => 'teacher'))
					->where('EXISTS (SELECT * FROM courses WHERE courses.wizard_id = wizards.id)');
		
		return $this->_source()->query($this->_resource, $query);
	}

	public function findAllWithoutCourse(\Gacela\Criteria $criteria = null)
	{
		$existsQuery = $this->_source()->getQuery()
							->from('courses')
							->where('courses.wizard_id = wizards.id')
							->assemble();

		$query = $this->_source()->getQuery($criteria)
					->from('wizards')
					->where('role = :role', array(':role' =>  'teacher'))
					->where("NOT EXISTS ({$existsQuery[0]})");

		return $this->_source()->query($this->_resource, $query);
	}
}
