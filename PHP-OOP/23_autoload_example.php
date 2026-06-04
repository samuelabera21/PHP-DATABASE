<?php
spl_autoload_register(function (string $class): void {
    echo "Autoloading {$class}\n";

    if ($class === "DemoClass") {
        eval('class DemoClass { public function message(): string { return "Loaded by autoloader"; } }');
    }
});

$demo = new DemoClass();
echo $demo->message();
