<?php
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$polaczenie= mysqli_connect ('localhost','root','','databasename') 
        or die("Padło połączenie z logowanie.php");

$sql="select * from users where login='$login' and haslo='$haslo'";

$query= mysqli_query($polaczenie, $sql) or die("Błąd w logowanie.php");

$haslozbazy=""; 
while ($row = mysqli_fetch_array($query)) {
    $zbazyhaslo=$row["haslo"];
}

   header("Location:zalogowany.php?login=$login");

?>
