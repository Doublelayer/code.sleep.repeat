<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constants</title>
</head>
<body>
    <?php

        # a constant is an identifier for a simple value. the value cannot be changed during the script
        # a valid constant name starts with a letter or underscore and NO $ sign !
        # NOTE: Unlike variables, constants are auto global across the entire script

        # SYNTAX: define(name, value, case-sensetive)
        # name: the name of the constant
        # value: the value of the constant
        # case-sensetive: true or false => default is false

        define("GREETING", "Welcome to my Git Repo - Doublelayer");
        echo GREETING;
        echo "<br/>";

        #_________________________________________________________
        # constants array

        define("cars", ["BMW", "Volkswagen", "Audi"]);
        echo cars[0];
        echo "<br/>";

       #_________________________________________________________
       # constants are global

       function greet(){
           echo GREETING;
       }

       greet();

       #_________________________________________________________
       # trigger_error

       trigger_error("Das wirf einen Hinweis", E_USER_NOTICE);
       # or
       trigger_error("Das wirf einen Hinweis", 1024); // Konstanten sind Zahlen in diesem Falle 1024 für E_USER_NOTICE

       trigger_error("Das wird eine Warnung erzeugen", E_USER_WARNING);
       trigger_error("Hier bricht das Script ab", E_USER_ERROR);
    ?>
</body>
</html>