<?php

namespace App\Calculators;


class AdminBonusCalculator extends SuperadminBonusCalculator{

    //there is an implemintation for every class
    public function calculate($salary)
    {
        return $salary * 0.1;
    }
}

