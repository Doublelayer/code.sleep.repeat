<?php

    $str = urlencode("<alert>XXS</alert>");
    echo $str;
    echo "<br>";

    $str = htmlspecialchars($str);
    echo $str;
    echo "<br>";
?>
