<?php
/**
 * @author noahg
 * @date 6/20/11
 * @brief
 *
 */

namespace App\Model;

use App\Kacela as K;

class Wizard extends K\Model
{

	public function get_form($name = NULL)
	{
		$form = parent::get_form($name);

		$form->fname->set('label', 'first name');
		$form->lname->set('label', 'last name');
		$form->locationName->set('label', 'location name');
		$form->addressId->set('render', false);

		$form->order('locationName', 'after', 'role');

		return $form;
	}

}