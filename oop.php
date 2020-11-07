<?php 

class Food{
    public string $name;
    public float $calories;

    public function __construct($name, $calories){
        $this->name = $name;
        $this->calories = $calories;
    }
}

class Person {
    private string $name;
    private int $year;
    public float $totalCalories = 100.0;

    public function __construct($name, $year){
        $this->name = $name;
        $this->year = $year;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getYear(){
        return $this->year;
    }
    public function setYear($age){
        $this->year = $year;
    }

    public function sayName(){
        echo $this->name;
    }

    public function eat(Food $food){
        $this->totalCalories = $this->totalCalories + $food->calories;
    }

}

class Teacher extends Person{
    public string $subject;

    public function __construct($name, $year, $subject){
        parent::__construct($name, $year);
        $this->subject = $subject;
    }
}

class Singer extends Person{
    public Array $songs = [];

    public function __construct($name, $year){
        parent::__construct($name, $year);
    }

    public function learnSong($songName, $text){
        $this->songs[$songName] = $text;
    }

    public function singASong($songName){
        if ($this->songs[$songName] != null){
            echo $this->songs[$songName];
        }
        else {
            echo "I do not know the " . $songName;
        }
    }

}

$oroz = new Teacher("Orozbek", 1998, "English");
$aiat = new Person("Aiatullo", 23);

$manty = new Food("Manty", 500.8);
$plov = new Food("Plov", 800.4);
$lagman = new Food("lagman", 500.4);
$dymdama = new Food("dymdama", 1300.4);
$KFC = new Food("KFC", 900.4);
$beshbarmak = new Food("beshbarmak", 1200.4);

$oroz->sayName();
echo "  " . $oroz->totalCalories;
echo "<br>";

$aiat->sayName();
echo "  " . $aiat->totalCalories;
echo "<br>";

$aiat->eat($manty);
$aiat->eat($plov);
$oroz->eat($plov);

echo $aiat->sayName() . " After eating " . $aiat->totalCalories . "<br>";
echo $oroz->sayName() . " After eating " . $oroz->totalCalories . "<br>";

echo $oroz->getName() . ": ";
echo $oroz->subject;

$nargiza = new Singer("Nargiza", 1998);
echo "<br>";
$nargiza->singASong("18 zhash");
echo "<br>";
$nargiza->learnSong("18 zhash", "oooooooon segiiiiiz zhaaaaaash");
$nargiza->singASong("18 zhash");

