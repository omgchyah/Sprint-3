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

    private function __construct(bool $stripes, string $color) { 
        $this->roars = 0; 
        $this->stripes = $stripes;
        $this->color = $color;
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

}






