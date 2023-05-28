<?php

namespace App\Calculators;


class RadiologistBonusCalculator extends SuperadminBonusCalculator{

    public function calculate($salary)
    {
        return $salary * 0.4;
    }
}