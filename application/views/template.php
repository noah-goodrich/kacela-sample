<?php
/** 
 * @author noahg
 * @date 7/6/11
 * @brief
 * 
 */
 defined('SYSPATH') OR die('No direct access allowed.');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<link rel="stylesheet" href="/site.css" type="text/css" media="screen" />
	<title>Kacela Sample: <?= $title ?></title>
</head>
<body>
	<div id="header">
		<img src="/logo.png"/>
		<h1><?= $title ?></h1>
	</div>
	<div class="clear"></div>
		
	<ul id="navigation">
		<li><a href="/crud">CRUD</a></li>
		<li><a href="/belongsto">Belongs To</a></li>
		<li><a href="/hasmany">Has Many</a></li>
		<li><a href="/inheritance_single">Single Table Inheritance</a></li>
		<li><a href="/inheritance_concrete">Concrete Table Inheritance</a></li>
		<li><a href="/dependents">Dependent Relationships</a></li>
		<li><a href="/criteria">Criteria vs Query</a></li>
		<li><a href="/debug">Debugging</a></li>
	</ul>
	<div class="clear"></div>

	<div id="content">
		<?= $content ?>
	</div>

</body>

</html>