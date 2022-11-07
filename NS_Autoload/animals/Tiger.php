<?php

namespace NS_Autoload\animals;

class Tiger
{
    public function __construct(protected $isHungry = false) {
        $this->isHungry = $isHungry;
    }

    public function __toString() {
        return $this->isHungry ? 'Time to eat' : 'Eat you later';
    }
}
