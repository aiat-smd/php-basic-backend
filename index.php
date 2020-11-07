<?php

echo "Hello World <br>";
echo "Aiat isamidinov";

$name = "Aiat";
$age = 23;
$car = "BMW";

echo "<br> $age <br>";

if ($age >= 18) {
    echo "Вы совершеннолетний" . "<br>";
}
else {
    echo "Вы не совершеннолетний" . "<br>";
}

$names = ["Aiat", "Erzat", "Akylay", 12, true];

for($i = 0; $i < sizeof($names); $i++){
    echo $names[$i] . "<br>";
}

$person = [
    "name" => "Aiat",
    "age" => 23,
    "car" => "Lambo"
];

echo $person["car"] . "<br>" . $person["age"];

function getAge($year) {
    return 2020 - $year;
}

echo "<br>" . getAge(1987);
