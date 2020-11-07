<?php 

class Person {
    private string $name;
    private int $age;
    public int $power = 0;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function sayName(){
        echo $this->name;
    }

    public function eat($tamak){
        $this->power = $this->power + $tamak;
    }

}

$student = new Person();
$student -> setName("Orozbek");
$student -> setAge(22);

$student->sayName();
echo "<br>" . $student->power;
echo "<br>";

$student->eat(20);

echo "After eating" . "<br>" . $student->power;
