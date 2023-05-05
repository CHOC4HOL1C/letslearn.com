<<<<<<< HEAD
<?php
$firstName = $_POST["sname"];
$email = $_POST["email"];
$message = $_POST["message"];

$connection = mysqli_connect("localhost", "root", "", "letslearndb");
if(!$connection)
 die("Could Not Connect to Database".mysql_connect_error()); 

$query = "INSERT INTO contactus(yourname, email, messages) 
VALUES ('{$firstName}','{$email}','{$message}')";
$result = mysqli_query($connection, $query) or die("Could not store into database");

mysqli_close($connection);
=======
<?php
$firstName = $_POST["sname"];
$email = $_POST["email"];
$message = $_POST["message"];

$connection = mysqli_connect("localhost", "root", "", "letslearndb");
if(!$connection)
 die("Could Not Connect to Database".mysql_connect_error()); 

$query = "INSERT INTO contactus(yourname, email, messages) 
VALUES ('{$firstName}','{$email}','{$message}')";
$result = mysqli_query($connection, $query) or die("Could not store into database");
>>>>>>> cdb780edf332fd7a67c53242727831e67a68eed3
?>