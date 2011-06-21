<?php
/** 
 * @author noahg
 * @date 6/20/11
 * @brief
 * 
 */

namespace App\Model;

use App\Kacela as K;

class Address extends K\Model
{

	public function get_form($name = NULL)
	{
		$form = parent::get_form($name);
		
		return $form;
	}

}