<?php

class SuperHero {
    public $name;
    public $power;
    public $planet;

    public function __construct($name, $power, $planet)
    {
        $this->name = $name;
        $this->power = $power;
        $this->planet = $planet;
    }

    public function attak() {
        return "$this->name ataca con sus poderes";
    }

    public function description(){
        return "$this->power ataco";
    }

}


$hero = new SuperHero("robin", "inteligente", "erlo eresita");



echo $hero->description();

?>