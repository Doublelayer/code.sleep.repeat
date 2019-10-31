<?php
/* 
    BENUTZEREINGABEN UND SICHERHEIT    

    !!! VETRAUE KEINER BENUTZEREINGABE !!!

    1. Wo landne Benutzereingaben?
        - $_GET
        - $_POST
        - $_COOKIE
        - $_SERVER
        - $_SESSION

    2. Von welchen Datentypen gehen keine Gefahren aus?
        - Interger
        - Booleans
        - Floats
        => daher nach möglichkeit Benutzereingaben casten!
        => $id = (int)$_GET["id"];

        => Alle Variablen die man nicht zu o.g. Typen casten kannst, müssen escaped werden!
        => Hierfür die Funktionen der Datenbank nutzen! MySQL: "mysql_real_escape_string"

    3. Prepared Statements

        $stm = $db->prepare("SELECT username FROM users WHERE username= :username")

        $stm->bindParam(":username", $_POST["username"]);

        $stm->execute();

    4. Cross Site Scripting XSS
        - Eingaben zu Interger, Booleans oder Float casten
        - Eingaben escapen => htmlspecialchars() | Die Funktion wandelt alle "&", "<" und ">" in ihre Escapesequenzen "&amp;", "&lt;" und "&gt;" um.
        */
        echo "<script>alert()</script>";
        echo htmlspecialchars("<script>alert()</script>");

    
?>