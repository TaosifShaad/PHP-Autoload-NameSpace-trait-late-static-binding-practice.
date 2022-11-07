<?php

namespace NS_Autoload\activities;

class Climb
{
    public function __construct(protected $canClimb = false) {
        $this->canClimb = $canClimb;
    }

    public function __toString() {
        return $this->canClimb ? 'Climbing is possible' : 'Climbing is not possible';
    }
}
