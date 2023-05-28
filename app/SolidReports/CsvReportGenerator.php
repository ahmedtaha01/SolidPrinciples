<?php

namespace App\SolidReports;

use App\Interfaces\CsvReportGeneratorInterface;

// thank you now i can implement only one function , i don't need other functions
class PdfReportGenerator implements CsvReportGeneratorInterface{

    public function generateReport()
    {
        // return pdf version
    }
}