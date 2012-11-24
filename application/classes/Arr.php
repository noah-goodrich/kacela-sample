<?php
/**
 * @user: noah
 * @date 11/24/12
 */
class Arr extends Kohana_Arr
{
	/**
	 * @param $array
	 * @param $key
	 * @param $value
	 * @return array
	 */
	public static function select_options($array, $key, $value)
	{
		$options = array();
		foreach($array as $row)
		{
			if(is_array($row))
			{
				$row = (object) $row;
			}

			$options[$row->$key] = $row->$value;
		}

		return $options;
	}
}
