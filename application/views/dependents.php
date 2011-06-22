<?php
/** 
 * @author noahg
 * @date 6/22/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

<h1>Dependent Relationships</h1>

<a href="/dependents/form/">Add</a>

<table>
	<thead>
	<tr>
		<th>Name</th>
		<th>Class</th>
		<th>Location</th>
		<th>Options</th>
	</tr>
	</thead>
	<tbody>

	<?
	foreach ($models as $wiz) {
		echo	 '<tr>
				<td>' . $wiz->full_name . '</td>
				<td>' . get_class($wiz) . '</td>
				<td>' . $wiz->name . '</td>
				<td>
					<a href="/dependents/form/' . $wiz->id . '">Edit</a>&nbsp;
					<a href="/dependents/delete/' . $wiz->id . '">Delete</a>
				</td>
			</tr>';
	}
	?>


	</tbody>
</table>