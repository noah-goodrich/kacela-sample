<?php
/** 
 * @author noahg
 * @date 7/11/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

<a href="/inheritance_single/form">Add</a>

<table>
	<thead>
	<tr>
		<th>Full Name</th>
		<th>Location</th>
		<th>Courses</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
	<? foreach ($teachers as $teacher): ?>
	<tr>
		<td><?= $teacher->full_name ?></td>
		<td><?= $teacher->location ?></td>
		<td>
		<? foreach($teacher->courses as $course): ?>
			<span><?= $course->subject ?></span><br/>
		<? endforeach; ?>
		</td>
		<td>
			<span><a href="/inheritance_single/form/<?= $teacher->id ?>">Edit</a></span>
			<span><a href="/inheritance_single/delete/<?= $teacher->id ?>">Delete</a></span>
		</td>
	</tr>
		<? endforeach ?>
	</tbody>
</table>