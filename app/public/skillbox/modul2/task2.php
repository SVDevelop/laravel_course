<?php 

class HungryCat
{
	public $name = "Cat";
	public $color = "color";
	public $lovelyfood = "food";
	
	public function __construct($name, $color, $food)
	{
		$this->setName($name);
		$this->setColor($color);
		$this->setFood($food);
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	public function setColor($color)
	{
		$this->color = $color;
	}
	public function setFood($food)
	{
		$this->lovelyfood = $food;
	}

	 public function eat($food)
	 {
	 	echo "Голодный кот {$this->name}, особые приметы: цвет - {$this->color}, съел {$food}. ";

		if ( $food == $this->lovelyfood) {
			echo "И замурчал 'мррррр' от своей любимой еды.";
		}
		echo "<br>";
	 }
}

$cat1 = new HungryCat('Барсик', 'рыжий', 'рыбка');
$cat1->eat('овес');
$cat1->eat('рыбка');
$cat1->eat('сыр');
$cat1->eat('колбасу');
$cat1->eat('какую-то гадость');
$cat2 = new HungryCat('Рыжик', 'рыжий', 'сосиська');
$cat2->eat('сосиська');
$cat2->eat('рыбка');
$cat2->eat('сыр');
$cat2->eat('колбасу');
$cat2->eat('какую-то гадость');

 ?>