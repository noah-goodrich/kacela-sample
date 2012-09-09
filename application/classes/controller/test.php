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
		$teachers = \Kacela::find_all('house');

		echo '<h2>First:</h2>';

		foreach($teachers as $t)
		{
			echo $t->name.'<br/>';
		}

		echo '<h2>Second:</h2>';
		foreach($teachers as $e)
		{
			echo $e->name.'<br/>';
		}

		exit;
	}

	public function action_stmt()
	{
		$db = \Kacela::instance()->get_datasource('db');

		$stmt = $db->query($db->load_resource('wizards'), 'SELECT * FROM houses');

		for($i=0;$i<6;$i++)
		{
			echo "<h3>Iteration $i:</h3>";
			while($row = $stmt->fetchObject())
			{
				echo $row->name.'<br/>';
			}

			$stmt->execute();
		}

		exit;
	}
}
