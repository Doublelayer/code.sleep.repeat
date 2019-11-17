<?php
    require_once(".env.loader.php");

    class Log{

        private static $_instance = null;

        private function __clone() {}

        public static function getLogger()
        {
            if (!isset(self::$_instance))
            {
                self::configureInstance();
            }
            return self::$_instance;
        }

        private function __construct()
        {
        }

        protected static function configureInstance(){
            $logger = ConfigProvider::get( Constanst::LOGGER . "/" . Constanst::LOGGER_ENGINE);
            self::$_instance = $logger;
        }

        public static function debug($message, array $context = []){
            self::getLogger()->addDebug($message, $context);
        }
        public static function info($message, array $context = []){
            self::getLogger()->addInfo($message, $context);
        }
        public static function notice($message, array $context = []){
            self::getLogger()->addNotice($message, $context);
        }
        public static function warning($message, array $context = []){
            self::getLogger()->addWarning($message, $context);
        }
        public static function error($message, array $context = []){
            self::getLogger()->addError($message, $context);
        }
        public static function critical($message, array $context = []){
            self::getLogger()->addCritical($message, $context);
        }
        public static function alert($message, array $context = []){
            self::getLogger()->addAlert($message, $context);
        }
        public static function emergency($message, array $context = []){
            self::getLogger()->addEmergency($message, $context);
        }
    }

?>