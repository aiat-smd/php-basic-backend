<?php 

function say($var){
    echo $var . "\n";
}

class Person {
    public string $name;

    static public int $count = 0;

    public function __construct($name){
        $this->name = $name;
        self::$count++;
    }
}

$person1 = new Person("Aibek");
$person2 = new Person("Ali");
$person3 = new Person("Nurbek");

say($person1->name);
say(Person::$count);


class Sun {
    private static ?Sun $instance = null;
    public string $name;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
            self::$instance = new Sun();
        }
        return self::$instance;
    }
}

$sun1 = Sun::getInstance();
$sun1->name = "Sunny";
$sun2 = Sun::getInstance();

say($sun1->name);
say($sun2->name);