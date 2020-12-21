<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BMI</title>
    </head>
    <body>
        <form method="POST" action="licz.php" id="formularz" name="formularz">
            <input type="number" min="40" max="560" name="waga" placeholder="Wpisz wagę w kg" id="waga" size="15">
            <br>
            <input type="number" min="100" max="250" name="wzrost" id="wzrost" placeholder="Wpisz wzrost w cm" size="15">
            <input type="submit" value="Przelicz" id="guzik">
        </form>
                <?php
        function licz($w, $h)
{
    return $w/(($h/100.0)*($h/100.0));
}
function opis($bmi)
{
    if($bmi<16) return "Anoresksja";
    else if ($bmi<18) return "Niedożywienie";
    else if ($bmi<25) return "Prawidłowo";
    else return "Otyłość";
}
 
if (isset($_POST["waga"]) && !empty($_POST["waga"]) && isset($_POST["wzrost"]) && !empty($_POST["wzrost"]))
{
    $waga=$_POST["waga"];
    $wzrost=$_POST["wzrost"];
    $bmi= licz($waga,$wzrost);
    echo "<h3>Twoje BMI wynosi: ".$bmi."</h3>";
    echo "<h4>Opis: ".opis($bmi)."</h4>";
}
else 
{
    header("Location: index.php");
}
        ?>
    </body>
</html>
