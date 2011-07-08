<?php
/** 
 * @author Noah Goodrich
 * @date 7/8/11
 * @brief
 * 
 */
 ?>
 
<h1>Criteria Examples</h1>

Total Students: <?= count($totalStudents)?> <br/>
Students with no address: <?= count($noAddresses) ?> <br/>

<h1>Query Examples</h1>

<h2>MySQL Examples</h2>

Active Teachers: <?= count($withCourse) ?> <br/>
Active Teachers without an E in their last name: <?= count($noE) ?> <br/>
Inactive Teachers: <?= count($withoutCourse); ?>