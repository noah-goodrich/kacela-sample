<?php
/** 
 * @author Noah Goodrich
 * @date 7/14/11
 * @brief
 * 
 */
 ?>

<h2>Courses for: <?= $student->full_name ?></h2>

<?= $form->render() ?>

<table>
	<thead>
	<tr>
		<th>Course</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($student->courses as $course): ?>
	<tr>
		<td><?= $course->subject ?></td>
		<td>
			<span><a href="/associations/remove/<?= $course->id ?>">Remove</a></span>
		</td>
	</tr>
<? endforeach ?>
	</tbody>
</table>