<?php

namespace App\Interfaces;

// 3 - liskov principle
// the solution is in this interface

// thank you very much, seems like i trusted the right person
// now every user will inherit this interface and would calculate the bonus, now every user class is
// treated as a Calculator and there is no problem in this as the calculate function is consistent
// in all classes

interface CalculateBonusInterface
{

    public function calculate($salary);
}

 
// the key aspect here that any code that depends on user type(doctor-admin) object can work
// seamlessly with any implementation of the CalculateInterface regardless of the user type