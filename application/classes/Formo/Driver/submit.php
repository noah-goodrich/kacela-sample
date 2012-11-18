<?php defined('SYSPATH') or die('No direct script access.');

class Formo_Driver_Submit extends Formo_Core_Driver_Submit {

	public function html()
	{
		parent::html();
		
		$this->_view->attr('value', ucfirst($this->_view->attr('value')));
	}
	

}