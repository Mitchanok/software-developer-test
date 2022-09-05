<?php
session_start();

namespace App\Companies;

use App\Interfaces\CompanyInterface;

class CodeBros extends Company implements CompanyInterface
{
    public function name(): string
    {
        return 'CodeBros';
    }

    public function employees(): string
    {
        return '2';
    }
}

?>