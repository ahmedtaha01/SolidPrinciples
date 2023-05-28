<?php

namespace App\Reports;

use App\Interfaces\ReportGeneratorInterface;

// too much, too much functions, help
class ReportGenerator implements ReportGeneratorInterface{

    public function pdfReport()
    {
        // return here the pdf version
    }

    public function csvReport()
    {
        //return here the csv version
    }

    public function excelReport()
    {
        //return here the excel version
    }
}

