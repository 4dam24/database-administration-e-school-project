<?php
$server = "localhost";
$username = "root";
$password = "";
$databasename = "data";

$connection = new mysqli($server, $username, $password, $databasename);

if ($connection->connect_error)
{
	die("connection failed: ".$connection->connect_error);
}

$sql = "INSERT INTO films(genre_id, title, year, rating) VALUES ($_POST[genre], '$_POST[title]', $_POST[year], $_POST[rating])";

if($connection->query($sql) === true)
{
	echo "Film".$_POST["title"]." successfully added.";
}
else
{
	echo "Error: ".$sql."<br>".$connection->error;
}

$connection->close();
?>