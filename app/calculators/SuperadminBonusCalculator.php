<?php

namespace App\Calculators;

// example which is not solid (L)
// this is the base class the other classes will inherit from it
// hello again, i need some help but this one is tough, i know that i have been so noisy these days
// but this is the cost of clean code
// now i want to calculate the bonus of salaries of different users type, 
// i am the super admin, other classes will inherit from me, but i fear that when they extends me
// they would change my behavior, treating doctor or radiologist like an super admin (me) would 
// lead to unexpected results and this violates the principle of --> objects of base class can be 
// replaceable with objects of derived class without affecting the correctness of the program, 
// seems tough and i trust that you will solve it

class SuperadminBonusCalculator{
    public function calculate($salary){
        return $salary * 0.2;
    }
}


