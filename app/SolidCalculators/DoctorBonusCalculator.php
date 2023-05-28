<?php

namespace App\SolidCalculators;
use App\Interfaces\CalculateBonusInterface;


class DoctorBonusCalculator implements CalculateBonusInterface{

    public function calculate($salary)
    {
        return $salary * 0.3;
    }
}