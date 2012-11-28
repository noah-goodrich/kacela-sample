<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	'compile_paths' => array
	(
		'css' => 'assets/css/',
		'js'  => 'assets/js/',
	),
	'pre_compile_dirs' => array
	(
		'css' => APPPATH.'assets/less/',
		'js'  => APPPATH.'assets/js/',
	),
);