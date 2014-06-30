<?php
namespace Lib\Base\Controllers;

use Core\Facades\ViewFacade as View;

class BaseController
{
	public function hello($name)
	{
		return View::create('Base/views/index.html', array('name' => $name));
	}
}
