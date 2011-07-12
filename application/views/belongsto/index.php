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
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($courses as $course): ?>
	<tr>
		<td><?= $course->subject ?></td>
		<td><?= $course->teacher->full_name ?></td>
		<td>
			<span><a href="/belongsto/form/<?= $course->id ?>">Edit</a></span>
			<span><a href="/belongsto/delete/<?= $course->id ?>">Delete</a></span>
		</td>
	<tr/>
<? endforeach ?>
	</tbody>
</table>