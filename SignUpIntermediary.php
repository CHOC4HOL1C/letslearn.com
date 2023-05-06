<?php

if (isSet($_POST['submit'])) {
  include 'connection.php';
  $stuEduLevel = $_POST['eduLevel'];
  $stuEduBoard = $_POST['eduBoard'];
  $stuDOB = $_POST['stuDOB'];
  $stuPN = $_POST['phoneNumber'];
  session_start();
  $stuEmail = $_SESSION['userEmail'];
  
  $sql = "UPDATE `student` SET `dob`='$stuDOB',`phoneNumber`='$stuPN',`eduLevel`='$stuEduLevel',`eduBoard`='$stuEduBoard' WHERE `email` = '$stuEmail'";
 
  mysqli_query($con, $sql);
  $con->close();

  header('Location: LoginPage.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Montserrat:wght@500;700&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
  <title>Sign Up</title>
</head>

<body>
  <div>
    <link href="./sign-up.css" rel="stylesheet" />
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your account has been created.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form class="sign-up-container" method="post">
      <div class="sign-up-sign-up-page">
        <div class="sign-up-signup-tray">
          <div class="sign-up-rectangle1">
            <div class="sign-up-line1"></div>
            <div class="sign-up-line2"></div>
            <span class="sign-up-text"><span><a href="LoginPage.php">Login</a></span></span>
            <span class="sign-up-text02"><span>EDUCATION LEVEL</span></span>
            <span class="sign-up-text04"><span><a href="SignUp.php">Sign Up</a></span></span>
            <div class="sign-up-rectangle2" style="width: 300px;">
              <input class="form-input" type="text" placeholder="O'Levels / AS / A2" name = "eduLevel">
            </div>
            <span class="sign-up-text08"><span>EDUCATION BOARD</span></span>
            <span class="sign-up-text10"><span>Already have an account</span></span>
            <div class="sign-up-rectangle3">
              <input class="form-input" type="text" placeholder="CAIE / Edexcel" name = "eduBoard">
            </div>
            <span class="sign-up-text12"><span>DATE OF BIRTH</span></span>
            <div class="sign-up-rectangle4">
              <input class="form-input" type="date" name = "stuDOB">
            </div>
            <span class="sign-up-text14"><span>PHONE NUMBER</span></span>
            <div class="sign-up-rectangle6">
              <input class="form-input" type="text" placeholder="+880" name = "phoneNumber">
            </div>
            <div class="sign-up-rectangle7"></div>
            <div class="sign-up-rectangle7"><button style="width: 179px; background-color: transparent; border-width: 0px; font-family: Poppins; font-size: 17px;" type="submit" name="submit"><span><a href="#"> Sign Up </a></span></button></div>
          </div>
          <div class="sign-up-ellipse1">
            <img src="person-icon.png" alt="useraccountprofile2512127" class="login-page-useraccountprofile" />
          </div>
        </div>
      </div>
    </form>
  </div>

</body>

</html>