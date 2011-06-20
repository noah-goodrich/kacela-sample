<?php
/** 
 * @author noahg
 * @date 6/17/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Crud extends Controller
{
	public function action_index()
	{
		$houses = kacela::find_all('house');

		foreach($houses as $house)
		{
			echo $house->houseName.'<br/>';
		}
	}

}
