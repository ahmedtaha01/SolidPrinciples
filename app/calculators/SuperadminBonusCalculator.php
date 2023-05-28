<?php

namespace App\Calculators;

// example which is not solid (L)
//this is the base class the other classes will inherit from
class SuperadminBonusCalculator{
    public function calculate($salary){
        return $salary * 0.2;
    }
}


// this is wrong as
// liskov substitution principle say that objects of derived classes can be treated as objects
// of the base class

// here in our example we can not treat admin object as a super admin object as it gives us a 
// different result in calculating the bonus of salary so we violate the principle
// This violates the principle that objects of a superclass should be replaceable by objects of its 
// subclasses without affecting the correctness of the program.

