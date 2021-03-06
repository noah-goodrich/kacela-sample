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

		$noAddresses = Kacela::load('wizard')->find_all($criteria1);
		$totalStudents = Kacela::load('wizard')->find_all($criteria2);

		$withCourse = Kacela::load('teacher')->find_all_with_course();
		$withoutCourse = Kacela::load('teacher')->find_all_without_course();

		$criteria = new Kacela_Criteria();

		$criteria->notLike('lName', 'e');

		$noE = Kacela::load('teacher')->find_all_with_course($criteria);

		$this->template->content = View::factory('criteria')
			->set('noAddresses', $noAddresses)
			->set('totalStudents', $totalStudents)
			->set('withCourse', $withCourse)
			->set('withoutCourse', $withoutCourse)
			->set('noE', $noE);
	}
}
