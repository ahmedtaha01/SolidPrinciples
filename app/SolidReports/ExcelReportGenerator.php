<?php

namespace App\SolidReports;

use App\Interfaces\ExcelReportGeneratorInterface;

// the same comment in CsvReportGenerator
class PdfReportGenerator implements ExcelReportGeneratorInterface{

    public function generateReport()
    {
        // return pdf version
    }
}