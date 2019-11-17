<?php
    class BrowserConsoleLogger implements ILogger{
        
        public static function addDebug($message, array $context = []){

        }

        public static function addInfo($message, array $context = []){
            $js_code = "console.log('%c PHP: ', 'background: #222; color: #bada55',  " . json_encode($message, JSON_HEX_TAG) . ");";
            if(!empty($context)){
                $js_code .= "console.dir(JSON.stringify(" . json_encode($context) . ", null, 2));";
            }
            $js_code = '<script>' . $js_code . '</script>';
            echo $js_code;
        }

        public static function addNotice($message, array $context = []){

        }

        public static function addWarning($message, array $context = []){

        }

        public static function addError($message, array $context = []){
            $js_code = "console.log('%c PHP: ', 'background: red; color: white',  " . json_encode($message, JSON_HEX_TAG) . ");";
            $js_code = '<script>' . $js_code . '</script>';
            echo $js_code;
        }

        public static function addCritical($message, array $context = []){

        }

        public static function addAlert($message, array $context = []){

        }
        
        public static function addEmergency($message, array $context = []){

        }
    }
?>