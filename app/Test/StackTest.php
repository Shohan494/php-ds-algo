<?php

include __DIR__ . '/../../Vendor/Autoload.php';

use App\Classes\StackArray;

try {
    $programmingBooks = new StackArray(10);
    $programmingBooks->push("Introduction to PHP7");
    $programmingBooks->push("Mastering JavaScript");
    $programmingBooks->push("MySQL Workbench tutorial");
    // echo $programmingBooks->pop()."\n";
    // echo $programmingBooks->top()."\n";    
} catch (Exception $e) {
    echo $e->getMessage();
}