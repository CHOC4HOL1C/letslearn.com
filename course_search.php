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
            $count = 1;
       echo  '<div class="col">
       <div class="card border-0 h-100">
         <iframe width="100%" height="200" src=' . $result['vidLink'] . '
           title="The whole of A Level Physics in about  12 hours  PHYSICS REVISION" frameborder="0"
           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
           allowfullscreen></iframe>
         <div class="card-body"
           style="color:white; background-color: #2a4d6d;display: flex; justify-content: space-between; align-items: center;">
           <h5 class="card-title" style="width: 100%;background-color:#2a4d6d;">' . $result['courseBoard'] . ' ' . $result['courseLevel'] . ' ' . $result['courseName'] . ' ' . $result['unit'] . '</h5>
           <a href="chosen-course-'.$count.'.php" class="btn btn-outline-info p-3" role="button">View Course</a>
         </div>
       </div>
     </div>';
     $count = $count + 1;
}
    } else {
        echo "<p>No videos found.</p>";
    }
}
mysqli_close($connection);

?>
