<?php
abstract class Report
{
    abstract public function title(): string;
}

class SalesReport extends Report
{
    public function title(): string
    {
        return "Sales Report";
    }
}

$report = new SalesReport();
echo $report->title();
