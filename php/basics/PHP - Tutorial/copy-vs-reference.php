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

        public function tanken(&$menge = 10){
            echo $menge;
        }

        public function tankenByCopy($menge){
            $menge++;
        }

        public function tankenByReference(&$menge){
            $menge++;
        }
    }

    # Werte an Funktion werden standarmäßig als Kopie übergeben
    # Es besteht aber die Möglichkeit dies als Referenz mit "$" zu deklarieren

    # Kopie => methodenName($wert)
    # Referenz => methodenName(&$wert)

    $auto = new Auto();
    $liter = 1;

    $auto->tankenByCopy($liter);
    echo "Kopie => methodenName(\$wert)<br/>";
    echo "Wert inkrementiert als Kopie: $liter<br/>";
    echo "<br/>";

    $auto->tankenByReference($liter);
    echo "Referenz => methodenName(&\$wert)<br/>";
    echo "Wert inkrementiert als Referenz mit (&): $liter<br/>";
    echo "<br/>";
    echo "Rückgabe von Werten einer Methode mit 'return' <br/>";
    echo "Rückgabe mehrerer Werte mit Hilfe von 'arrays' möglich.";
?>
</body>
</html>