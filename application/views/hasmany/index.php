<?php
/** 
 * @author noahg
 * @date 7/12/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>
 
<table>
	<thead>
	<tr>
		<th>Teacher</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($teachers as $teacher): ?>
	<tr>
		<td><?= $teacher->full_name ?></td>
		<td>
			<span><a href="/hasmany/index/<?= $teacher->id ?>">View Courses</a></span>
		</td>
	</tr>
<? endforeach; ?>
	</tbody>
</table>