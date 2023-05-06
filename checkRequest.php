<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Request Subject</title>
</head>

<body style="background-color: #2a4d6d;">
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">
                    <h4>Teacher ID</h4>
                </th>
                <th scope="col">
                    <h4>Requested Subject</h4>
                </th>
                <th scope="col">
                    <h4>Subject's Level</h4>
                </th>
                <th scope="col">
                    <h4>Subject's Board</h4>
                </th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            include 'connection.php';
            $sql = "SELECT teacherID, courseName, courseLevel, courseBoard FROM courserequest";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr style=\"color: #eee;\">";
                echo "<th scope=\"row\">" . $row['teacherID'] . "</th>";
                echo "<td>" . $row['courseName'] . "</td>";
                echo "<td>" . $row['courseLevel'] . "</td>";
                echo "<td>" . $row['courseBoard'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="AdminDashboard.php" style="margin: 10px"><button type="submit" name="submit" class="btn btn-dark"> <img src="Icon/rotatedArrow.png" style="width: 20px; height: 20px;" alt=""> Back </button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>