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
		$db = Kacela::instance()->get_datasource('db');

		$resource = $db->loadResource('houses');

		exit(\Debug::vars($resource));
	}
}
