<?php

class myClass {
    public $var;
		
    function __construct() {
	$this->var = 1;
    }

    function inc() { return ++$this->var; }
}

$a = new myClass(); // $a "references" a Foo object
$b = $a; //b also references the same Foo object as a
//($a) == ($b) == <id> of Foo object, but a and b are different entries in symbols table

echo "\$a = ";var_dump($a);
echo "<br>";
echo "\$b = ";var_dump($b);
echo "<br>";

$c = &$a; //$c is an alias of $a
//($a, $c) == <id> of Foo object, c is an alias of a in the symbols table
echo "\$c = ";var_dump($c);
echo "<br>";

$a = NULL;
//The entry in the symbols table which links "$a" with Foo object is removed
//Since that entry was removed, $c is not related to Foo anymore
//Anyway, Foo still exists in memory and it is still linked by $b
echo "\$a = ";var_dump($a);
echo "<br>";
echo "\$b = ";var_dump($b);
echo "<br>";
echo "\$c = ";var_dump($c);
echo "<br>";
echo "\$b->var: ".$b->inc();
echo "<br>";
echo "\$b->var: ".$b->inc();
echo "<br>";

$b = NULL;
//The entry in the symbols table which links "$b" with the Foo object is removed
//There are no more entries in the symbols table linked to Foo,
//So, Foo is not referenced anymore and can be deleted by the garbage collector

echo "\$b = ";var_dump($b);
echo "<br>";


$w  = new myClass();
$x = new myClass();
$y = new myClass();

$x = "1";
$y = &$x;
$y = "2b";

echo "\$x = ";var_dump($x);
echo "<br>";
echo "\$y = ";var_dump($y);
echo "<br>";

if($x === $y){
    echo "yes it points to the same object";
}


echo "<br><br><br><br><br>";
echo "<a href='https://www.toptal.com/php/objects-references-php-memory'>====>>> objects-references-php-memory</a>";
?>
