<?php
class Dashboard
{
    public function render(): string
    {
        return '<h1>PHP OOP Dashboard for XAMPP</h1>';
    }
}

$dashboard = new Dashboard();
echo $dashboard->render();
