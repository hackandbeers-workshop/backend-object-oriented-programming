<?php
// Simple delegation //
class Store
{
    public function generateReport()
    {
        $report = new ReportGenerator();
        echo $report->generateReport();
    }
}

class ReportGenerator
{
    public function generateReport()
    {
        // Magic stuff //
    }
}
