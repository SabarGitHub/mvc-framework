<?php
namespace Lib\Reveil\Form;

use Core\Facades\Facade;

class ReveilFormFacade extends Facade
{
	public static function getProviders()
	{
		return 'reveilForm';
	}
}
