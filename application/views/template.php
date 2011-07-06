<?php
/** 
 * @author noahg
 * @date 7/6/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>

<html>
<head>
	
</head>
<body>
	<div id="header">
		<h1><?= $title ?></h1>
	</div>

	<ul id="navigation">
		<li><a href="/inheritance/single">Single Table Inheritance</a></li>
		<li><a href="/inheritance/concrete">Concrete Table Inheritance</a></li>
		<li><a href="/dependents">Dependent Relationships</a></li>
	</ul>

	<div id="content">
		<?= $content ?>
	</div>

</body>

</html>