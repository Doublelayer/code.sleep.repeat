<?php
    require_once(".env.loader.php");

    class Logger {
        static function isDev(){
            return getenv("APP_ENV") == "dev" ? true : false;
        }
        static function log($string) {
            if(self::isDev()){
                print $string . "<br>";
            }
        }

        static function logArray($array){
            if(self::isDev()){
            print_r($array); echo "<br>";
            }   
        }

    }

?>