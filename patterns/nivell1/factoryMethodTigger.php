<?php   declare(strict_types=1);

//Factory Method

//Abstract Tigger Creator

// Tigger class
class Tigger {
    private int $roars;
    private bool $stripes;
    private string $color;

    public function __construct() { 
        $this->roars = 0;
        $this->stripes = false; // Default value
        $this->color = ''; // Default value
    }

    public function setStripes(bool $stripes): void {
        $this->stripes = $stripes;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function roar(): string {
        $this->roars++;
        return "Grrr!" . PHP_EOL;
    }

    public function getRoars(): int {
        return $this->roars;
    }

    public function hasStripes(): bool {
        return $this->stripes;
    }

    public function getColor(): string {
        return $this->color;
    }
}

abstract class TiggerCreator {

    abstract public function createTigger(): Tigger;
}

class ClassicTiggerCreator extends TiggerCreator {

    public function createTigger(): Tigger {
        $tigger = new Tigger();
        $tigger->setColor("oranger");
        $tigger->setStripes(true);
        return $tigger;
    }
}

class HalloweenTiggerCreator extends TiggerCreator {

    public function createTigger(): Tigger {
        $tigger = new Tigger();
        $tigger->setColor("black");
        $tigger->setStripes(false);
        return $tigger;
    }
}

$classicCreator = new ClassicTiggerCreator();
$classicTigger = $classicCreator->createTigger();

$halloweenCreator = new HalloweenTiggercreator();
$halloweenTigger = $halloweenCreator->createTigger();