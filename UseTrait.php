<?php

require_once 'trait.php';

class Employee
{
    use CheckPlaceAndCondition, Condition {
        CheckPlaceAndCondition::isHurt insteadof Condition;
    }

    public string $name = 'Rafsan';
    public string $address = 'Dhaka';
}

class Furniture
{
    use CheckPlaceAndCondition;

    public int $number = 5;
    public string $position = 'Office';

    public function __construct(public string $category) {
        $this->category = $category;
    }

    public function setPosition(string $position): void {
        $this->position = $position;
    }
}

echo (new Employee())->isHurt(true).PHP_EOL;

$chair = new Furniture('chair');
checkPosition($chair->where($chair->position));

$chair->setPosition('Home');
checkPosition($chair->where($chair->position));

function checkPosition(string $position) {
    if ($position) {
        echo 'In Office'.PHP_EOL;
    } elseif (!$position) {
        echo 'Take it to Office'.PHP_EOL;
    }
}
