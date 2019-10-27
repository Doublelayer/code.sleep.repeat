<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php

        #############################
        #                           #
        #   Variables Declaretion   #
        #                           #
        #############################

        $txt = "Hello World!";
        echo $txt;

        # Variables are Case-Sensetive

        echo $Txt; # will generate an error

        echo "<br/>";

        #############################
        #                           #
        #       Variables Scope     #
        #                           #
        #############################

        # local
        # global
        # static

        $x = 5; // global scope

        function test(){
            echo $x; // will generate an error

            $x = 2;
            echo "Local Scope => $x"; // local scope
            echo "<br/>";
        }
        test();


        #############################
        #                           #
        #        Global Keyword     #
        #                           #
        #############################

        #  is used to acces a global variable from within a function

        function globalKeyword(){
            global $x;
            echo "Global Keyword => $x";
            echo "<br/>";
        }
        globalKeyword();


        # php stores all global variables in an array calles => $GLOBALS[index] => index is the name of the variable

        function globalArray()
        {
            echo "Global Array => " . $GLOBALS['x'];
            echo "<br/>";
        }
        globalArray();


        #############################
        #                           #
        #        Static Keyword     #
        #                           #
        #############################

        function staticKeyword(){
            static $y = 0;
            echo "Static Keyword => $y";
            $y++;
            echo "<br/>";
        }
        staticKeyword();
        staticKeyword();
        staticKeyword();

    ?>
</body>
</html>