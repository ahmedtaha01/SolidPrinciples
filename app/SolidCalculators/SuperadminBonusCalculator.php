<?php

namespace App\SolidCalculators;
use App\Interfaces\CalculateBonusInterface;

class SuperadminBonusCalculator implements CalculateBonusInterface{
    public function calculate($salary){
        return $salary * 0.2;
    }
}

