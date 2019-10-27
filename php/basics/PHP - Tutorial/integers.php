<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integers</title>
</head>
<body>
    <?php

        # php has the following functions to check if the type of a variable is integer
        
        # is_int()
        # is_integer()
        # is_long()
        
        $x = 4533;
        var_dump(is_int($x));
        
        echo "<br/>";
        
        $y = 4.34;
        var_dump(is_int($y));

        
        #________________________________________________________________________________
        # php has the following functions to check if the type of a variable is float

        # is_float()
        # is_double() - alias of is_float()

        $x = 10.365;
        var_dump(is_float($x));
        echo "<br/>";

        
        #________________________________________________________________________________
        # A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
        
        #PHP has the following functions to check if a numeric value is finite or infinite:

        # is_finite()
        # is_infinite()
        
        $z = 1.9e411;
        var_dump($z);
        echo "<br/>";


        #________________________________________________________________________________
        # NaN stands for Not a Number

        # PHP has the following functions to check if a value is not a number:

        # is_nan()

        $x = acos(8);
        var_dump($x);
        echo "<br/>";


        #________________________________________________________________________________
        # is_numeric can be used to find wheter a variable is numeric

        $x = 5985;
        var_dump(is_numeric($x));
        echo "<br/>";

        $x = "5985";
        var_dump(is_numeric($x));
        echo "<br/>";

        $x = "59.85" + 100;
        var_dump(is_numeric($x));
        echo "<br/>";

        $x = "Hello";
        var_dump(is_numeric($x));
        echo "<br/>";


        #________________________________________________________________________________
        # casting strings and floats to integers
        # The (int), (integer), or intval() function are often used to convert a value to an integer.

        $x = 3243242.32423;
        echo (int)$x;
        echo "<br/>";

        $x = "3243242.32423";
        echo (int)$x;
        echo "<br/>";

    ?>
</body>
</html>