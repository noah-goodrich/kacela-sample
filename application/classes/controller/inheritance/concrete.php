<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Inheritance_Concrete extends Controller
{
	public function action_index()
	{
		$students = Kacela::find_all('student');
	
		//Kacela::load('student')->debug(false);

		foreach($students as $st)
		{
			echo $st->id.' '.get_class($st).'<br/>';
		}
	}

}
