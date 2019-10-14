<?php 

class ToyFactory
{
	public $name;
	public $price;
	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function createToy($name)
	{
		// $this->price = rand(1, 10);
		return rand(1, 10);
	}
}

// public function createToy($name)
// {

// }
