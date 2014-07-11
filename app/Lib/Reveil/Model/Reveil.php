<?php
namespace Lib\Reveil\Model;

/**
 * @Entity @Table(name="reveil") 
 */
class Reveil
{
	/**
	 * @Id @Column(type="integer") @GeneratedValue
	 */
	protected $id;
	/**
	 * @Column(type="datetime")
	 */
	protected $date;

	public function setDate($value)
	{
		$this->date = $value;	
	}
}
