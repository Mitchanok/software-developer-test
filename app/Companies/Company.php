<?php

namespace App\Companies;

abstract class Company
{
    public function information(): string
    {
        return "{$this->name()} heeft {$this->employees()} medewerkers.";
    }
}