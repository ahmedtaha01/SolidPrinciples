<?php

namespace App\Interfaces;

// 4 - interface segregation principle
// hello, we will finish soon i hope,
// i am the report generator interface and i think this is too much functions to implement, 
// i think that some classes will need one or two functions not all these functions
// you know what to do of course

// look at \App\Reports\ReportGenerator
interface ReportGeneratorInterface
{

    public function pdfReport();

    public function csvReport();

    public function excelReport();
}
