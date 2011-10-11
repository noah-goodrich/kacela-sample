<?php
/** 
 * @author Noah Goodrich
 * @date 7/13/11
 * @brief
 * 
 */
 ?>

<h3>Students</h3>
<table>
	<thead>
	<tr>
		<th>Student</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($students as $student): ?>
	<tr>
		<td><?= $student->full_name ?></td>
		<td>
			<span><a href="/associations/student/<?= $student->id ?>">View Courses</a></span>
		</td>
	</tr>
<? endforeach ?>
	</tbody>
</table>

<br/>
<br/>

<h3>Courses</h3>
<table>
	<thead>
	<tr>
		<th>Course</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($courses as $course): ?>
	<tr>
		<td><?= $course->subject ?></td>
		<td><span><a href="/associations/course/<?= $course->id ?>">View Students</a></span></td>
	</tr>
<? endforeach ?>
	</tbody>
</table>