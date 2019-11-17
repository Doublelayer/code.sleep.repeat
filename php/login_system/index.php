<?php
require_once("core/Init.php");


DB_Manager::getInstance()->query("SELECT usernme FROM users WHERE username = :name", array(":name" => "flo"));
?>