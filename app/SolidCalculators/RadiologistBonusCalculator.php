<?php

namespace App\SolidCalculators;
use App\Interfaces\CalculateBonusInterface;

class RadiologistBonusCalculator implements CalculateBonusInterface{

    public function calculate($salary)
    {
        return $salary * 0.4;
    }
}