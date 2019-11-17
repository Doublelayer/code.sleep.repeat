<?php
    session_start();

    require_once(".env.loader.php");

    require_once("helpers/autoload.php");
    spl_autoload_register("autoload");
    
    require_once("classes/Constants.php");

    require_once("config/appConfig.php");
    
    require_once("helpers/ConfigProvider.php");
    require_once("helpers/sanitize.php");
?>