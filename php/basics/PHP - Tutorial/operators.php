<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operarors</title>
</head>
<body>
    <?php
    $x = 2;
    $y = 4;

    ########################
    #                      #
    # Arithmetic Operators #
    #                      #
    ########################


        echo "Addition x + y: " . ($x + $y) . "<br/>";
        echo "Substraction x - y: " . ($x  - $y) . "<br/>";
        echo "Multiplication x * y: " . $x  * $y . "<br/>";
        echo "Division x / y: " . $x / $y . "<br/>";
        echo "Modulus x % y: " . $x % $y . "<br/>";
        echo "Exponentiation x ** y: " . $x ** $y . "<br/>";

        echo "<br/><br/><br/>";
        
    ########################
    #                      #
    # Comparison Operators #
    #                      #
    ########################

        echo "Equal x == y: " . ($x == $y) . "<br/>";
        echo "Identical x === y: " . ($x === $y) . "<br/>";
        echo "Not identical x !== y: " . ($x !== $y) . "<br/>";
        echo "Not equal x != y: " . ($x != $y) . "<br/>";
        echo "Not equal x <> y: " . ($x <> $y) . "<br/>";
        echo "Greater than x > y: " . ($x > $y) . "<br/>";
        echo "Less than x < y: " . ($x < $y) . "<br/>";
        echo "Greater than or equal to x >= y: " . ($x >= $y) . "<br/>";
        echo "Less than or equal to x <= y: " . ($x <= $y) . "<br/>";
        echo "Spaceship x <==> y: " . ($x <=> $y) . "<br/>";

        echo "<br/><br/><br/>";
        
    ####################################
    #                                  #
    # Conditional Assignment Operators #
    #                                  #
    ###################################

        # the conditional assignment operators are used to set a value depending on conditions

        # operator |       name      |           example          
        #   ?:     |     ternary     | $x = exp1 ? expr2: expr3
        #   ??     | Null coalescing |    $x = expr1 ?? exp2

        echo true ? "Is True" : "Is False";
        echo "<br>";
        echo "This is not Null" ?? "?? operator introduced in PHP 7";
        echo "<br>";
        echo null ?? "?? operator introduced in PHP 7";

        

    ?>
</body>
</html>