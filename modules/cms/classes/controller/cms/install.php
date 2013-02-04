<?php
/**
 * @user: noah
 * @date 1/29/13
 */

class Controller_Cms_Install extends Controller_Cms
{
	public function action_index()
	{
		$source = Kacela::instance()->get_datasource('cms');

		try
		{
			$source->loadResource('content');
		}
		catch(Exception $e)
		{
			if($e->getCode() == 1044)
			{
				exit('Cms config is incorrect or database and user not set up.');
			}


		}
	}
}