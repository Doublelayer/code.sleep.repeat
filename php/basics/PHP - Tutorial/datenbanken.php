<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datenbanken - PHP</title>
</head>
<body>
    <?php

        class DatabbaseManager extends PDO{
            public function __construct($file="my_setting.ini"){
                if(!$settings = parse_ini_file($file, TRUE)) throw new exception("Unable to open " . $file . ".");
                
                $db_settings = $settings["database"];

                $driver = $db_settings["driver"];
                $host = $db_settings["host"];
                $port = (!empty($db_settings["port"])) ? ($db_settings["port"]) : "";
                $db_schema = $db_settings["schema"];
                $username = $db_settings["username"];
                $password = $db_settings["password"];

                $dns = $driver . ":host=" . $host . ";" . $port . ";dbname=" . $db_schema;
                echo $dns;

                parent::__construct( $dns , $username, $password);
                parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            }
        }

        $db = new DatabbaseManager();
        $result = $db->query("SELECT * FROM benutzer")->fetchAll(PDO::FETCH_ASSOC);
        echo $result;


    ?>
</body>
</html>