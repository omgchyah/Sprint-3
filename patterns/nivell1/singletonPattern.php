<?php declare(strict_types=1);

/*
class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}

*/

class Tigger {

    private static $instance = null;
    private int $roars;
    private bool $stripes;
    private string $color;


    private function __construct() { 
        $this->roars = 0;
        $this->stripes = false;
        $this->color = "";
    }

    //getInstance Method
    public static function getInstance(): Tigger {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    //Method produce Roar
    public function roar(): string {

        $this->roars++;

        return "Grrr!" . PHP_EOL;
    }

    //Roar counter
    public function getRoars() {
        return $this->roars;
    }

    //Setters
    public function setStripes(bool $stripes): void {
        $this->stripes = $stripes;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    //Getters
    public function getColor(): string {
        return $this->color;
    }

    public function getStripes(): bool {
        return $this->stripes;
    }

    //toString
    public function __toString(): string {
        return "Tigger has " . $this->getColor() . " fur and it's " . $this->getStripes() . " he has stripes. "
        . "He has roared " . $this->getRoars() . " times." . PHP_EOL;
    }

}

//Create unique instance of object
$tigger = Tigger::getInstance();

//Multiple roars
echo $tigger->roar();
echo $tigger->roar();
echo $tigger->roar();

echo "Number of roars: " . $tigger->getRoars() . PHP_EOL;

$tigger->setColor("orange");
$tigger->setStripes(true);

echo $tigger;








