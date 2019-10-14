<?php 

class Cat
{
	public $name = "Cat";
	
	public function __construct($name)
	{
		$this->setName($name);
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
}

class Dog
{
	public $name = "Dog";

	public function __construct($name)
	{
		$this->setName($name);
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
}

class Fish
{
	public $name = "Fish";

	public function __construct($name)
	{
		$this->setName($name);
	}

	public function setName($name)
	{
		$this->name = $name;
	}
}

$cat1 = new Cat("Барсик");
$cat2 = new Cat("Вася");
$cat3 = new Cat("Наполеон");
$dog1 = new Dog("Рекс");
$dog2 = new Dog("Белка");
$dog3 = new Dog("Шарик");
$dog4 = new Dog("Дик");
$dog5 = new Dog("Тузик");
$fish = new Fish("Нэмо");

 ?>