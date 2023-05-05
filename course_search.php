<?php

$connection = mysqli_connect("localhost", "root", "", "letslearndb");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['search'])) 
{
    $search = $_POST['search'];
    $sql = "SELECT * FROM course WHERE courseName LIKE '%$search%'";
    $result = mysqli_query($connection, $sql);


    $search_results = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $search_results[] = $row;
        }
    }
    if (count($search_results) > 0) {
        echo "<h2>Search Results</h2>";
        foreach ($search_results as $result) {
       echo $result['vidLink'];
}
    } else {
        echo "<p>No videos found.</p>";
    }
}
mysqli_close($connection);

?>
