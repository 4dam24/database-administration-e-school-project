<?php 

function sprawdz($param) {
    return (isset($_POST[$param]) && !empty($_POST[$param]));
}

if (sprawdz("nazwisko") && sprawdz("imie") && sprawdz("login") && sprawdz("haslo"))
{
$nazwisko = $_POST['nazwisko'];
$imie = $_POST['imie']; 
$login = $_POST['login'];
$haslo = $_POST['haslo'];


     
    $connection = mysqli_connect('localhost', 'root','','data')
    or die('Brak połączenia z serwerem MySQL'); 
     
    // dodajemy rekord do bazy 
  
    $add = mysqli_query($connection,"INSERT INTO `users`( `nazwisko`, `imie`, `login`, `haslo`) VALUES ('$nazwisko','$imie','$login','$haslo')")
            or die("Nie dodano.");
            
     
    if(mysqli_affected_rows($add)) echo "Rekord został dodany poprawnie."; 
    else echo "Nie udało się dodać nowego rekordu."; 
     
    mysqli_close($connection); 

    header("Location:sukces.php?imie=$imie&nazwisko=$nazwisko");
} 
?>
