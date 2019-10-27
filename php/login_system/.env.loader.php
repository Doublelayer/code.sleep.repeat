<?php
    declare(strict_types=1);
    require  __DIR__ . "/vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
?>