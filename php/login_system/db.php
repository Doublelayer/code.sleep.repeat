<?php
    require_once(".env.loader.php");
    include("logger.php");

    
    class DB_Manager extends PDO{

        private static $_instance = null;
        private function __clone() {}

        public static function getInstance()
        {
            if (null === self::$_instance)
            {
                self::$_instance = new self;
            }
            return self::$_instance;
        }

        private function __construct()
        {
            $driver     = getenv("DB_DRIVER");
            $host       = getenv("DB_HOST");
            $dbname     = getenv("DB_NAME");
            $username   = getenv("DB_USERNAME");
            $password   = getenv("DB_PASSWORD");
            $dns        = "$driver:host=$host;dbname=$dbname";

            try{
                parent::__construct($dns, $username, $password);
                Logger::log("Succsessfully connectd to " . parent::getAttribute(constant("PDO::ATTR_CONNECTION_STATUS")));
            } catch (PDOException $e) {
                Logger::log($this->error = $e->getMessage());
            }
        }

        public function logServerInfo()
        {
            $attributes = array(
                "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
                "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
                "TIMEOUT"
            );
            
            foreach ($attributes as $val) {
                $attr =  "PDO::ATTR_$val: ";
                $val = parent::getAttribute(constant("PDO::ATTR_$val")) . "<br>";
                Logger::log($attr . $val);
            }
        }

        public function execute($filename)
        {
            $query = self::getSqlStatement($filename);
            $stm = self::prepare($query);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }

        private function getSqlStatement($filename){
            return file_get_contents("sql/" . $filename);
        }

        public function executeWithParams($filename, $params)
        {
            $query = self::getSqlStatement($filename);
            $stm = self::prepare($query);

            self::bindParams($stm, $params);
            
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        
        private function bindParams(&$stm, $params)
        {
            foreach($params as $key => $value){
                $stm->bindParam(":$key", $value);
            }
        }
    }

    $db = DB_Manager::getInstance();
    $rows = $db->execute("select_all_users.sql");
    Logger::logArray($rows);

    echo "<br><br><br><br>";
    $params = array("user_name" => "admin");
    $rows = $db->executeWithParams("select_all_where_username.sql", $params);
    Logger::logArray($rows);
?>