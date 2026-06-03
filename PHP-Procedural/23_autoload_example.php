<?php
spl_autoload_register(function (string $className) {
    echo "Auto loading: " . $className;
});

class DemoClass
{
}

new DemoClass();
