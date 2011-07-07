<?php
/** 
 * @author noahg
 * @date 7/7/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

<a href="/inheritance_concrete/form">Add</a>

<table>
	<thead>
	<tr>
		<th>Full Name</th>
		<th>House</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($students as $student): ?>
	<tr>
		<td><?= $student->full_name ?></td>
		<td><?= $student->house->name ?></td>
		<td>
			<span><a href="/inheritance_concrete/form/<?= $student->id ?>">Edit</a></span>
			<span><a href="/inheritance_concrete/delete/<?= $student->id ?>">Delete</a></span>
		</td>
	</tr>
<? endforeach ?>
	</tbody>
</table>