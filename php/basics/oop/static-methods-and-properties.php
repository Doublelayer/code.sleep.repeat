<?php
    class Apfel{
        public static $anzahl_aepfel = 0;
        public $farbe;

        function __construct($farbe){
            self::$anzahl_aepfel++;
            $this->farbe = $farbe;
        }
    }

    $apfelkorb[] = new Apfel('rot');
    $apfelkorb[] = new Apfel('gelb');
    $apfelkorb[] = new Apfel('gruen');

    echo Apfel::$anzahl_aepfel; 

?>