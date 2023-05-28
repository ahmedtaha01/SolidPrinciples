<?php

namespace App\SolidCalculators;
use App\Interfaces\CalculateBonusInterface;

class AdminBonusCalculator implements CalculateBonusInterface{
    public function calculate($salary)
    {
        return $salary * 0.1;
    }
}


