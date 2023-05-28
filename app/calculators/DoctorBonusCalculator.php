<?php

namespace App\Calculators;


class DoctorBonusCalculator extends SuperadminBonusCalculator{

    public function calculate($salary)
    {
        return $salary * 0.3;
    }
}
