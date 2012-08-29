<?php
/**
 * Created by JetBrains PhpStorm.
 * User: noah
 * Date: 8/28/12
 * Time: 9:29 PM
 * To change this template use File | Settings | File Templates.
 */
class Controller_Test extends Controller_Site
{
	public function action_index()
	{
		$teachers = \Kacela::load('teacher')->find_all_without_course();

		$this->template->content = \Debug::vars($teachers);
	}
}
