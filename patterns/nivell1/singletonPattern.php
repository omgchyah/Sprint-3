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

    public static function getInstance(): Tigger {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function roar(): string {

        $this->roars++;

        return "Grrr!" . PHP_EOL;
    }

    public function getRoars() {
        return $this->roars;
    }

    public function setStripes(bool $stripes): void {
        $this->stripes = $stripes;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getColor(): string {
        return $this->color;
    }

    public public getStripes(): bool {
        return $this->stripes;
    }

    public function __toString(): string {
        return "Tigger has " . $this->getColor() . " fur and it's " . $this->getStripes . " he has stripes."
    }

}

$tigger = Tigger::getInstance();

echo $tigger->roar();
echo $tigger->roar();
echo $tigger->roar();

echo "Number of roars: " . $tigger->getRoars();

$tigger->setColor("orange");
$tigger->setStripes(true);








