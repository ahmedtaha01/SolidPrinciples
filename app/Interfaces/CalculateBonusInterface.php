<?php

namespace App\Interfaces;

// the solution is in this interface
interface CalculateBonusInterface
{

    public function calculate($salary);
}

// now every derived class object can be replaced with its parent object
//This adheres to LSP as each user type is treated uniformly as a CalculateBnonus interface, and 
// the behavior of calculate() is consistent across different implementations. 
//Objects of different user types can be substituted without affecting the correctness of the program.