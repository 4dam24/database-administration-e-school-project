<!DOCTYPE html>
<html>
<head>
	<title>School</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl.css">
	<script type="text/javascript" src="script.js"></script>
</head>

<body>

<header><h1>E-school project</h1></header>

<div id="left">
<h3>To download</h3>
<br>
<ul>
	<li>
		<a href="../data/lessonplan.txt">lesson plan</a>
	</li>
	<li>
		<a href="../data/notes.sql">notes</a>
	</li>
</ul>
<br>
<hr>
	<h3>Determining the highest average</h3>
<br>
<ul>
	<li>
		Leszek <input type="text" id="lech">
	</li>
	<li>
		Nowak <input type="text" id="nowak">
	</li>
	<li>
		Kowalski <input type="text" id="kowalski">
	</li>
</ul>
<br>
<input type="button" value="averange" id="averange" onclick="averange()">
<br>
<h3>The highest averange:</h3>
<br>
<div id="wynik"></div>
</div>
<div id="right">
<?php
	echo "Hello!";
       
	$login=$_GET["login"];
        $name; $surname;
	$connection = mysqli_connect('localhost', 'root', '', 'school') 
    or die('No connection to the MySQL server'); 
    $sql="select * from users where login='".$login."'" ;
        $query= mysqli_query($connection, $sql) or die("Query fail in loggedin.php");
        while ($row = mysqli_fetch_array($query)) {
           $name=$row["name"];
           $surname=$row["surname"];
        }
        mysqli_close($connection);
	echo $name." ";
	echo $surname;
    
	
        
?>
<hr>
<h3>Rejestracja nowego użytkownika</h3>
<form action="signup.php" method="POST">
	Surname: <input type="text" name="surname" placeholder="Surname">
	Name: <input type="text" name="name" placeholder="Name">
	Login: <input type="text" name="login" placeholder="Login">
	Password: <input type="password" name="password" placeholder="Password">
	<br><br>
	<input type="submit" value="Post data">
</form><br><br><br>

<form action="login.php" method="POST">
<label>Login: <input type="text" name="login" placeholder="Login"></label>
<label>Password: <input type="password" name="password" placeholder="Password"></label><br><br>
<label><input type="submit" value="Log in"></label>
</form>
</div>
<footer><h4>Created by Adam Bednarczyk</h4></footer>
</body>
</html>  
