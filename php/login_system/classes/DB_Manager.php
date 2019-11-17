<?php
    
    class DB_Manager extends PDO{

        private static $_instance = null;

        private function __clone() {}

        public static function getInstance()
        {
            if (!isset(self::$_instance))
            {
                self::$_instance = new self;
            }
            return self::$_instance;
        }

        private function __construct()
        {
            $prefix  = Constanst::DATABASE_ARRAY_NAME . "/";

            $driver     = ConfigProvider::get($prefix . Constanst::DATABASE_DRIVER);
            $host       = ConfigProvider::get($prefix . Constanst::DATABASE_HOST);
            $dbname     = ConfigProvider::get($prefix . Constanst::DATABASE_NAME);
            $username   = ConfigProvider::get($prefix . Constanst::DATABASE_USERNAME);
            $password   = ConfigProvider::get($prefix . Constanst::DATABASE_PASSWORD);
            $dns        = "$driver:host=$host;dbname=$dbname";
            
            try{
                parent::__construct($dns, $username, $password);
                Log::info("Succsessfully connectd to " . parent::getAttribute(constant("PDO::ATTR_CONNECTION_STATUS")));
            } catch (PDOException $e) {
                Log::error($this->error = $e->getMessage());
            }
        }

    //     public function logServerInfo()
    //     {
    //         $attributes = array(
    //             "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
    //             "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
    //             "TIMEOUT"
    //         );
            
    //         foreach ($attributes as $val) {
    //             $attr =  "PDO::ATTR_$val: ";
    //             $val = parent::getAttribute(constant("PDO::ATTR_$val")) . "<br>";
    //             Logger::log($attr . $val);
    //         }
    //     }

    //     public function execute($filename)
    //     {
    //         $query = self::getSqlStatement($filename);
    //         $stm = self::prepare($query);
    //         $stm->execute();

    //         return $stm->fetchAll(PDO::FETCH_ASSOC);
    //     }

        public function query($sql, $params = array()){
            $stm = parent::prepare($sql);
            if($stm->execute($params)){
                Log::info("yes", $stm->fetchAll(PDO::FETCH_OBJ));
            }else{
                Log::error($stm->errorInfo());
            }

            // $stm->execute($params);
            // $authors = $stm->fetchAll();
            // Log::info($authors);
        }


        private function getSqlStatement($filename){
            return file_get_contents("sql/" . $filename);
        }

        public function executeWithParams($filename, $params = array())
        {
            $this->error = false;
            $query = self::getSqlStatement($filename);
            $stm = self::prepare($query);

            self::bindParams($stm, $params);
            
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // $db = DB_Manager::getInstance();
    // $rows = $db->execute("select_all_users.sql");
    // Logger::logArray($rows);

    // echo "<br><br><br><br>";
    // $params = array("user_name" => "admin");
    // $rows = $db->executeWithParams("select_all_where_username.sql", $params);
    // Logger::logArray($rows);
?>