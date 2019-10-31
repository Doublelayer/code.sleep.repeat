<?php

    class A {
        public $foo = 1;
    }  

    $a = new A;
    $b = $a;     // $a und $b sind Kopien des gleichen Bezeichners
                // ($a) = ($b) = <id>
    $b->foo = 2;
    echo $a->foo."\n";


    $c = new A;
    $d = &$c;    // $c und $d sind Referenzen
                // ($c,$d) = <id>

    $d->foo = 2;
    echo $c->foo."\n";


    $e = new A;

    function foo($obj) {
        // ($obj) = ($e) = <id>
        $obj->foo = 2;
    }

    foo($e);
    echo $e->foo."\n";


?>