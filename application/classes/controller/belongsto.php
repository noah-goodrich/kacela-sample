<?php
/** 
 * @author noahg
 * @date 7/7/11
 * @brief
 * 
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Belongsto extends Controller_Site
{
	public function action_index()
	{
		$this->title = 'Belongs To Example';
	}

	public function action_form($id = null)
	{
		
	}

	public function action_delete($id)
	{

	}
}
