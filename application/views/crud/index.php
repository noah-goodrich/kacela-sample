<?php
/** 
 * @author noahg
 * @date 7/7/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

<a href="/crud/form/">Add</a>

<table>
	<thead>
	<tr>
		<th>House Name</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($houses as $house): ?>
	<tr>
		<td><?= $house->name ?></td>
		<td>
			<span><a href="/crud/form/<?= $house->id ?>">Edit</a></span>&nbsp;
			<span><a href="/crud/delete/<?= $house->id ?>">Delete</a></span>
		</td>
	</tr>
<? endforeach; ?>
	</tbody>
</table>