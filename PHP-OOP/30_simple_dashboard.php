<?php
class Dashboard
{
    public function widgets(): array
    {
        return ["Users", "Sales", "Orders"];
    }
}

$dashboard = new Dashboard();
echo implode(", ", $dashboard->widgets());
