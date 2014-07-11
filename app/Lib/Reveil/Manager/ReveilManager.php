<?php
namespace Lib\Reveil\Manager;

use Core\Manager\Manager;
use Lib\Reveil\Model\Reveil;

class ReveilManager extends Manager
{
	private $reveil;

	public function __construct(Reveil $reveil)
	{
		$this->reveil = $reveil;	
	}

	public function add()
	{
		$em = $this->getEntityManager();	
		$this->reveil->setDate(new \DateTime('2014-09-30 06.00.00'));
		$em->persist($this->reveil);
		$em->flush();
	}
}
