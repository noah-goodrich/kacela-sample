<?php
/** 
 * @author noahg
 * @date 7/13/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

 <h2>Courses for: <?= $teacher->full_name ?></h2>

<?= $form->render() ?>

<table>
	<thead>
	<tr>
		<th>Subject</th>
		<th>&nbsp;</th>
	</tr>
	</thead>
	<tbody>
<? foreach($teacher->courses as $course): ?>
	<tr>
		<td><?= $course->subject ?></td>
		<td>
			<span><a href="/hasmany/remove/<?= $course->id ?>">Remove</a></span>
		</td>
	</tr>
<? endforeach ?>
	</tbody>
</table>