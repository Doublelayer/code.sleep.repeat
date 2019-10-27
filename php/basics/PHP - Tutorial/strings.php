<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>
    <?php
        function newLine(){
            echo "<br/>";
        }


        # strlen return the length of a string
        echo strlen("Hello World");
        newLine();

        # str_word_count count the number of words in a string
        echo str_word_count("Hello World");
        newLine();

        # strrev reverse a string
        echo strrev("Hello World");
        newLine();

        # strpos search for a text within a string
        echo strpos("Hello World", "World"); // case sensetive !!
        newLine();

        # str_replace replace text within a string
        echo str_replace("world", "Doublelayer", "Hello world!"); // case sensetive !!


        # => https://www.php.net/manual/de/ref.strings.php
    ?>
</body>
</html>