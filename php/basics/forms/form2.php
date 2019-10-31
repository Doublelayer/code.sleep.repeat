<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
</head>
<body>
    <?php
        $currencies = array("dollar-us" => "US-Dollar", "euro" => "Euro");
        print_r($currencies);
        print "<br>";

        print_r ($_GET["fruits"]);


        if(validInput()){
            $amount = (float)$_GET["amount"];
            $from = $currencies[$_GET["from"]];
            $to = $currencies[$_GET["to"]];
            echo "<p>Du möchstes $amount $from in $to umrechnen?</p>";
        }else{
            print_r($_GET);
        }

        function validInput()
        {
            global $currencies;
            return !empty($_GET["from"]) && in_array($_GET["from"], array_keys($currencies)) &&
                   !empty($_GET["to"])   && in_array($_GET["to"],   array_keys($currencies));
        }
    ?>




    <form action="form2.php" method="get">
    <p>Währungsrechner:</p>
    <br>
    <label for="from">Ursprungswährung:</label>
    <select name="from" id="from">
    <?php
        foreach($currencies as $key => $value){
            echo "<option value='$key'> $value </option>";
        }
    ?>
    </select>
    <br>
    <label for="to">Zielwährung:</label>
    <select name="to" id="to">
    <?php
        foreach($currencies as $key => $value){
            echo "<option value='$key'> $value </option>";
        }
    ?>
    </select>
    <br>
    <label for="amount">Betrag:</label>
    <input type="number" name="amount">
    <input type="submit" value="Umrechnen">
    </form>
</body>
</html>