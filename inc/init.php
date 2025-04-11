<?php

// Autoload files in the current directory
$autoload_files = glob(__DIR__ . '/*.php');
foreach ($autoload_files as $file) {
    if (is_file($file)) {
        require_once $file;
    }
}