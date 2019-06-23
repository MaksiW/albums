<?php

spl_autoload_register(function ($class) {
    if (strpos($class, 'Controller')) {
        $base_dir = __DIR__ . '/../controllers/';
    } elseif (strpos($class, 'Model')) {
        $base_dir = __DIR__ . '/../models/';
    }
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});