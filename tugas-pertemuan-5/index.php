<?php

//  Class Kendaraan
class Kendaraaan {
    public $merk;
    public $color;
    public $speed;

    public function __construct($merk, $color, $speed) {
        $this->merk = $merk;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function speeding() {
        return "\nKendaraan dengan merk $this->merk dapat melaju dengan kecepatan $this->speed KM/J";
    }
}

// Child dari class Kendaraan
class Type extends Kendaraaan {
    public $type;
    public $price;

    public function __construct($merk, $color, $speed, $type, $price) {
        parent::__construct($merk, $color, $speed);
        $this->type = $type;
        $this->price = $price;
    }

    public function describe() {
        echo "\nUntuk merk $this->merk berwarna $this->color dengan type $this->type dapat anda beli dengan harga Rp $this->price";
        echo parent::speeding();
    }
}

// Object Parent Class
$baru = new Kendaraaan("Suzuki", "Black", 430);
echo $baru->speeding();

// Object Child
$avanza = new Type("Toyota", "Silver", 310, "Avanza", 53000000);
$avanza->describe();


// class baru
class Animal {
    public $name;
    public $habitat;
    public $food;

    public function __construct($name, $habitat, $food) {
        $this->name = $name;
        $this->habitat = $habitat;
        $this->food = $food;

        echo "\n\n*** Welcome to Wikinimal ***\n";
    }

    public function describe() {
        return "$this->name live in $this->habitat, and they eat $this->food";
    }
}

// object class baru
$lion = new Animal("Lion", "savanna", 'meat');
echo $lion->describe();
?>