<?php
    class ConfigProvider{
        public static function get($path = null){
            if($path){
                $config = $GLOBALS[Constanst::GONFIG_ARRAY_NAME];
                $path = explode("/", $path);
                
                
                foreach($path as $bit){
                    if(isset($config[$bit])){
                        $config = $config[$bit];
                    }
                }
                return $config;
            }

            return false;
        }
    }
?>