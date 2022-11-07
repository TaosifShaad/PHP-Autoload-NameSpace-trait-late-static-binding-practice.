<?php

declare(strict_types=1); 

abstract class Animal
{
    public $name;
    public $numOfLegs;

    abstract protected function setName(string $name): string;
    abstract protected function numberOfLegs(): int;
}

class Cat extends Animal
{
    public function numberOfLegs(): int {
        return 4;
    }

    public function setName(string $name): string {
        $this -> name = $name;
        return $this -> name;
    }
}

$catObj = new Cat();
echo $catObj->numberOfLegs() . PHP_EOL;
$catObj -> setName('Cat');
echo $catObj -> name;
