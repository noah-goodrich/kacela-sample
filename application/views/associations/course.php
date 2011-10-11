<?php
/** 
 * @author Noah Goodrich
 * @date 10/10/11
 * @brief
 * 
 */
 ?>
 
<table>
	<thead>
	<tr>
		<th>Student</th>
	</tr>
	</thead>
	<tbody>
<? foreach($course->students as $student): ?>
	<tr>
		<td><?= $student->full_name ?></td>
	</tr>
<? endforeach ?>
	</tbody>
</table>