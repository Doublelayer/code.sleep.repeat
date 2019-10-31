<?php 
#declare(strict_types=1);

    function addNumbers(int $a, int $b){
        return $a + $b;
    }

    echo addNumbers(5, "5 Tage"); // will print 10 since strict is NOT enabled
    echo "<br>";
    

    # now uncomment declare !

    echo addNumbers(5, "5 Tage"); // since strict is enabled, an error will be generated
?>
