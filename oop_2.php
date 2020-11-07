<?php 

interface Phone{
    function call();
}

interface Camera{
    function recordVideo();
    function takePhoto();
}

abstract class Device{
    public string $name;
    public int $year;

    public function __construct($name, $year){
        $this->name = $name;
        $this->year = $year;
    }
}

class Headset extends Device{

}

class Speaker extends Device{

}

class Keyboard extends device{

}

class Smartphone extends Device implements Phone, Camera {
    public function call(){

    }

    public function recordVideo(){

    }

    public function takePhoto(){

    }

    public function pairWithBluetooth(Device $device){

    }
}

$device = new Smartphone();
