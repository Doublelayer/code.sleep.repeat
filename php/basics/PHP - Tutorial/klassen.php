<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klassen - PHP</title>
</head>
<body>
<?php
    class Auto {
        public $Marke="Volkswagen";

        public function starten(){
            echo "Das Auto wird gestartet";
        }

        public function tanken($menge){
            echo $menge;
        }

    }

?>
</body>
</html>