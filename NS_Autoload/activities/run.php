<?php

namespace NS_Autoload\activities;

class Run
{
    public function __construct(protected $canRun = false) {
        $this->canRun = $canRun;
    }

    public function __toString() {
        return $this->canRun ? 'Running is possible' : 'Running is not possible';
    }
}
