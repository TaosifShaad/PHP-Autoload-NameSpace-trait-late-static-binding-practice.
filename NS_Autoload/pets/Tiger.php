<?php

namespace NS_Autoload\pets;

class Tiger
{
    public function __construct(protected $isHungry = false) {
        $this->isHungry = $isHungry;
    }

    public function __toString() {
        return $this->isHungry ? 'Let the pet eat' : 'Go to sleep cat';
    }
}
