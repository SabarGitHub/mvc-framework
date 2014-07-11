<?php
namespace Lib\Reveil\Controllers;

use Core\Controller\Controller;
use Lib\Reveil\Manager\ReveilManager;
use Lib\Reveil\Form\ReveilFormFacade as ReveilForm;
use Core\Facades\ViewFacade as View;
use Core\Facades\FormBuilderFacade as FormBuilder;

class ReveilController extends Controller
{
	private $reveilManager;

	public function __construct(ReveilManager $reveilManager)
	{
		$this->reveilManager = $reveilManager;	
	}

	public function index()
	{
		return "hello";
	}

	public function add()
	{
		$form = FormBuilder::create(
			'test',
			'form-add',
			ReveilForm::getElements()
		);

		return View::create('Reveil/views/add.html', array('form' => $form));
	}

	public function delete(){}
	public function update(){}
	public function show(){}
}
