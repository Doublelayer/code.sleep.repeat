<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Types</title>
</head>
<body>
    <h1>Es gibt folgende Daten-Typen:</h1>
    <ul>
        <li>String</li>
        <li>Integer</li>
        <li>Float (floating point numbers - also called double)</li>
        <li>Boolean</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resource</li>
    </ul>

    <?php
        function newLine(){
            echo "<br/>";
        }


        # String
        # Integer
        # Float (floating point numbers - also called double)
        # Boolean
        # Array
        # Object
        # NULL
        # Resource

        # !! var_dump prints the data type and value !!

        # String 
        $string = "Hello World!";
        echo "String: $string";

        newLine();

        # Integer
        $interger = 4534;
        var_dump($interger); 

        newLine();

        # Float
        $float = 10.453;
        var_dump($float); 

        newLine();

        # Boolean
        $true = true;
        $false = false;
        var_dump($true);
        newLine();
        var_dump($false);
        newLine();

        # arrays
        $array = array("Volvo", "BMW", "Volkswagen");
        var_dump($array);
        newLine();

        #Objects
        class Car{
            function __construct(){
                $this->model = "Volkswagen";
            }
        }

        $golf = new Car();
        echo $golf->model;
        newLine();

        # NULL
        $not_null = "Hello World!";
        $not_null = null;
        var_dump($not_null);
        newLine();

        # Resource
        # it is the storing of a reference to funtioncs and resources external to PHP
        # a common example of using the resource data type is a database call

    ?>
</body>
</html>