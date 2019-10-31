<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vererbung - PHP</title>
</head>
<body>
<?php 
    class Auto {
            public function starten(){
                echo "Das Auto wird gestartet<br/>";
            }

            public function hupen()
            {
                echo "Ring Ring ...<br/>";
            } 
        }

    class Golf extends Auto {
        public function hupen()
        {
            echo "miep miep<br/>";
        }

        public function callParentHupen(){
            parent::hupen();
        }
    }

    $auto = new Auto();
    $auto->starten();
    $auto->hupen();

    echo "<br/>";

    $golf = new Golf();
    $golf->starten();
    $golf->hupen();
    $golf->callParentHupen();
?>
<?= $_SERVER['PHP_SELF'] ?>
</body>
</html>