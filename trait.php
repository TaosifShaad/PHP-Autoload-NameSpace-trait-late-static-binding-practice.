<?php

trait CheckPlaceAndCondition
{
    public function isHurt(bool $hurt): string {
        if (true === $hurt) {
            return 'Action needed';
        }
        if (false === $hurt) {
            return 'Not hurt, no action needed';
        }
    }

    public function where(string $str): bool {
        if ('Office' === $str) {
            return true;
        }
        if ('Office' !== $str) {
            return false;
        }
    }
}

trait Condition
{
    public function isHurt(bool $hurt): string {
        if (true === $hurt) {
            return 'Take the pet to the vet';
        }
        if (false === $hurt) {
            return 'Leave the pet and give it some food';
        }
    }
}
