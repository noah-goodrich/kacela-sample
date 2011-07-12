<?php
/** 
 * @author noahg
 * @date 7/12/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

<a href="/belongsto/form">Add Course</a>
<table>
	<thead>
	<tr>
		<th>Subject</th>
		<th>Teacher</th>
	</tr>
	</thead>
	<tbody>
<? foreach($courses as $course): ?>
	<tr>
		<td><?= $course->subject ?></td>
		<td><?= $course->teacher->full_name ?></td>
	<tr/>
<? endforeach ?>
	</tbody>
</table>