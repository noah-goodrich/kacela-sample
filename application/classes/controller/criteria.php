<?php
/** 
 * @author Noah Goodrich
 * @date 7/8/11
 * @brief
 * 
*/

class Controller_Criteria extends Controller_Site
{
	public function action_index()
	{
		$this->title = 'Criteria vs Query Example';

		$criteria1 = new \Gacela\Criteria;

		// Limit to only students who have no address specified
		$criteria1->equals('role', 'student')
			->isNull('location');

		$criteria2 = new \Gacela\Criteria;

		// Pull back all wizards who are students
		$criteria2->equals('role', 'student');

		$noAddresses = \Gacela::instance()->loadMapper('wizard')->findAll($criteria1);
		$totalStudents = \Gacela::instance()->loadMapper('wizard')->findAll($criteria2);
		
		$withCourse = \Gacela::instance()->loadMapper('teacher')->findAllWithCourse();
		$withoutCourse = \Gacela::instance()->loadMapper('teacher')->findAllWithoutCourse();

		$criteria = new \Gacela\Criteria;

		$criteria->notLike('lName', 'e');

		$noE = \Gacela::instance()->loadMapper('teacher')->findAllWithCourse($criteria);

		$this->template->content = View::factory('criteria')
			->set('noAddresses', $noAddresses)
			->set('totalStudents', $totalStudents)
			->set('withCourse', $withCourse)
			->set('withoutCourse', $withoutCourse)
			->set('noE', $noE);
	}
}
