<?php
namespace Lib\Reveil\Form;

class ReveilForm
{
	public function getElements()
	{
		return array(
			array('type' => 'textbox', 'label' => 'Premier Champs:', 'name' => 'field1'),
			array('type' => 'textbox', 'label' => 'Second Champs:', 'name' => 'field2'),
			array('type' => 'button', 'label' => 'OK')
		);
	}
}
