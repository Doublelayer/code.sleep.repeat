<?php 

    class Vater{
        public $public = "public";
        protected $protected = "protected";
        private $private = "private";

        function getProtected(){
            return $this->protected;
        }

    }

    class Kind extends Vater{
        public function getProtected(){
            return $this->protected;
        }
        public function setProtected($value){
            $this->protected = $value;
        }

        public function getPrivate(){
            return $this->private;
        }
    }
    /*
    public:     kann von überall durch das Objekt aufgerufen werden
                $vater->public;
                or
                $kind->public;

    protected:  kann nicht direkt aufgerufen werden => lediglich über "getter" und "setter" möglich
                protected Eigenschaften/Methoden werden zwar vererbt aber können nicht direkt von der Kindklasse aufgerufen werden
                hierfür müssen hilfmethoden definiert werden
    */
    echo "<pre>";

    $vater = new Vater();
    echo "vater -> public : ", $vater->public, PHP_EOL;     // funktioniert 
    // echo $vater->protected;           // funktioniert nicht
    // echo $vater->private;             // funktioniert nicht

    $kind = new Kind();
    echo "kind -> public : ", $kind->public, PHP_EOL;  // funktioniert

    echo "kind -> getProtected() : ",$kind->getProtected(), PHP_EOL; 

    echo "Now kind->setProtected('Hello World!')", PHP_EOL; 
    $kind->setProtected("Hello World!");

    echo "vater -> getProtected() : ",$vater->getProtected(), PHP_EOL; 
    echo "kind -> getProtected() : ", $kind->getProtected(), PHP_EOL; // funktioniert

    echo $kind->getPrivate(), PHP_EOL;   // funktioniert nicht



    echo "</pre>";
?>