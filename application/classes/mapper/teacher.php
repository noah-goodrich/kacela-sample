<?php
/**
 * @author noah
 * @date 4/30/11
 *
*/

namespace App\Mapper;

class Teacher extends Wizard
{

	protected $_resourceName = 'wizards';

	public function find_all(\Gacela\Criteria $criteria = null)
	{
		if(is_null($criteria))
		{
			$criteria = \kacela::criteria();
		}

		$criteria->equals('role', 'teacher');

		return parent::find_all($criteria);
	}

	public function find_all_with_course(\Gacela\Criteria $criteria = null)
	{
		$query = $this->_source()->getQuery($criteria)
					->from('wizards')
					->left_join(array('a' => 'addresses'), 'wizards.address_id = a.id', array('*'))
					->where('role = :role', array(':role' => 'teacher'))
					->where('EXISTS (SELECT * FROM courses WHERE courses.wizard_id = wizards.id)');

		return $this->_collection($this->_runQuery($query));
	}

	public function find_all_without_course(\Gacela\Criteria $criteria = null)
	{
		$existsQuery = $this->_source()->getQuery()
							->from('courses')
							->where('courses.wizard_id = wizards.id')
							->assemble();

		$query = $this->_source()->getQuery($criteria)
					->from('wizards')
					->left_join(array('a' => 'addresses'), 'wizards.address_id = a.id', array('*'))
					->where('role = :role', array(':role' =>  'teacher'))
					->where("NOT EXISTS ({$existsQuery[0]})");

		return $this->_collection($this->_runQuery($query));
	}
}
