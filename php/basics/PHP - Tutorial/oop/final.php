<?php

    final class Kunde{

    }

    /*
        not allowed to extend from Kunde since Kunde is final
    */
    class Peter extends Kunde{

    }


    /*
        not allowed to override changeAutor since changeAutor is final
    */
    class Buch{
        final function changeAutor() {

        }
    }

    class Titanic extends Buch{
        function changeAutor($test){

        }
    }

?>