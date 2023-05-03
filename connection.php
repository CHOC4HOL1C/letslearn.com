
<?php
    $server = "localhost"; // 127.0.0.1:3307 ONLY for Zannat 
    $username = "root";
    $password = "";
    $db = "letslearn";
    $con = mysqli_connect($server, $username, $password, $db);
    
    if(!$con)
    {
        die("Connection to database has failed, due to: ".mysqli_connect_error());
    }
?>