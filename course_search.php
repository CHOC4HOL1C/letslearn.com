<?php

// Connect to database
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdbname";

$connection = mysqli_connect("localhost", "root", "", "letslearndb");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle search query
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    
    // Construct SQL query
    $sql = "SELECT * FROM course WHERE column1 LIKE '%$search%' OR column2 LIKE '%$search%' OR column3 LIKE '%$search%'";
    
    // Execute query
    $result = mysqli_query($connection, $sql);
    
    // Display results
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Column 1: " . $row['column1'] . "<br>";
            echo "Column 2: " . $row['column2'] . "<br>";
            echo "Column 3: " . $row['column3'] . "<br><br>";
        }
    } else {
        echo "No results found.";
    }
}

mysqli_close($connection);

?>
