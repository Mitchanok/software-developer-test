<?php

namespace App\Interfaces;

interface CompanyInterface
{
    public function name(): string;

    public function employees(): int;
}