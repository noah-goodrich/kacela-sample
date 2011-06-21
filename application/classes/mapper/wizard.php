<?php
/** 
 * @author noahg
 * @date 6/20/11
 * @brief
 * 
 */

namespace App\Mapper;

use Kacela\Mapper as M;

class Wizard extends M\Mapper
{
	protected $_dependents = array('address');
}