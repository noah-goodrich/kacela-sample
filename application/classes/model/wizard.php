<?php
/** 
 * @author noah
 * @date 4/23/11
 * @brief
 * 
*/

namespace App\Model;

class Wizard extends Model
{

	protected function _get_full_name()
	{
		return $this->fname.' '.$this->lname;
	}

	protected function _set_full_name($value)
	{
		$this->fname = trim(substr($value, 0, strpos($value, ' ')));
		$this->lname = trim(substr($value, strpos($value, ' ')));
	}
}
