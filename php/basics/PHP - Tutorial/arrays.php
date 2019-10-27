<?php
    $leeres_array = array();

    $himmelsrichtungen = array("Norden", "Osten", "Süden", "Westen");

    $kunde = array("name" => "Doublelayer", "alter" => 33, "email" => "git@doublelayer.com");

    echo "<pre>";
    print_r($leeres_array);
    echo "</pre>";
    
    echo "<pre>";
    print_r($himmelsrichtungen);
    echo "</pre>";
    
    echo "<pre>";
    print_r($kunde);
    echo "</pre>";
    echo "---------------------------------------------<br>";

    #______________________________________________________
    echo "auto key <br>";
    # wurden zunächst Schlüssel definiert und dann nicht mehr
    # wird php den höchsten Schlüssel im Array suchen und um +1 erhöhen
    # so ergibt sich in diesem Beispiel => 4, 3, 5

    $arr = array(4 => "Affe", 3 => "Dschungel", "Giraffe");
    
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    # or
    foreach($arr as $key => $value){
        echo $key . ": " . $value;
        echo "<br>";
    }

    echo "---------------------------------------------<br>";

    #_______________________________________________________
    echo "Zugriff auf Arrays <br>";

    $name = "name";
    echo "<pre>";
    print_r($kunde["email"]);
    echo "<br>";
    echo $name;
    echo "</pre>";
    
    $kunde[$name] = "Ham"; // Element bekommt neuen Wert
    $kunde["vorname"] = "Flo"; // neues Element
    
    echo "<pre>";
    print_r($kunde);
    echo "<pre>";
    echo "---------------------------------------------<br>";

    #_______________________________________________________
    echo "Zuweisungen <br>";

    $arr1[] = "A";
    $arr1[] = "B";
    $arr1[] = "C";

    // ist das gleiche wie

    $arr2 = array("A", "B", "C");

    print_r($arr1);
    print_r($arr2);
    echo "---------------------------------------------<br>";
    
    #_______________________________________________________
    echo "Mehr Dimensionale Arrays <br>";

    $kunde1["nachname"] = "Hoffman";
    $kunde1["vorname"] = "Thomas";

    $kunde2["nachname"] = "Boder";
    $kunde2["vorname"] = "Theo";

    $kunden = array($kunde1, $kunde2);

    print_r($kunden);
    echo "---------------------------------------------<br>";

?>