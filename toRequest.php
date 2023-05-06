<?php
    if (isSet($_POST['submit']))
    {
        include 'connection.php';
        $reqID = NULL;
        $teacherID = $_POST['teachID'];
        $subjectName = $_POST['subjName'];
        $subjectLevel = $_POST['subjlvl'];
        $subjectBoard = $_POST['subjboard'];
        
        $sql = "INSERT INTO `courserequest`(`requestID`, `teacherID`, `courseName`, `courseLevel`, `courseBoard`) VALUES ('$reqID','$teacherID','$subjectName','$subjectLevel','$subjectBoard')";
        
        if(mysqli_query($con, $sql))
        {
            echo "<script>alert('Form submitted successfully!')</script>";
        }
        else
        {
            echo "<script>alert('Form submission has failed. Error: '. mysqli_error($con))</script>";
        }
        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toRequest.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Request Subject</title>
</head>
<body style="background-color: #2a4d6d;">
<div class="formContainer">
        <form method="post">
            <div class="mt-3 mb-2">
                <label for="teachID" class="form-label">
                    <h5>Your ID</h5>
                </label>
                <input type="text" class="form-control" id="teachID" name="teachID" required>
            </div>
            <div class="mb-2">
                <label for="subjName" class="form-label">
                    <h5>Subject Name</h5>
                </label>
                <input type="text" class="form-control" id="subjName" name="subjName" required>
            </div>
            <div class="mb-2">
                <label for="subjlvl" class="form-label">
                    <h5>Subject Level</h5>
                </label>
                <input type="text" class="form-control" id="subjlvl" name="subjlvl" required>
            </div>
            <div class="mb-2">
                <label for="subjboard" class="form-label">
                    <h5>Subject Board</h5>
                </label>
                <input type="text" class="form-control" id="subjboard" name="subjboard" required>
            </div>
            <button type="submit" name="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>