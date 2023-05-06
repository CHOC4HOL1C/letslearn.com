<?php
  if (isset($_POST['submit'])) 
  {
    include 'connection.php';
    $stuName = $_POST['studentName'];
    $stuEmail = $_POST['email'];
    $stuPass = $_POST['password'];
    $stuRePass = $_POST['cpassword'];

    if ($stuPass == $stuRePass) 
    {
      $sql = "INSERT INTO `student`(`studentName`, `email`, `password`) VALUES ('$stuName', '$stuEmail', '$stuPass')";
    }
    mysqli_query($con, $sql);
    $con->close();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Montserrat:wght@500;700&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
  <link href="./sign-up.css" rel="stylesheet" />
  <title>Sign Up</title>
</head>

<body>
  <div>
    <link href="./sign-up.css" rel="stylesheet" />
    <div class="sign-up-container">
      <div class="sign-up-sign-up-page">
        <div class="sign-up-signup-tray">
          <div class="sign-up-rectangle1">
            <div class="sign-up-line1"></div>
            <div class="sign-up-line2"></div>
            <span class="sign-up-text"><span><a href="LoginPage.php">Login</a></span></span>
            <span class="sign-up-text04"><span><a href="SignUp.php">Sign Up</a></span></span>
            <form method="post">
              <span class="sign-up-text02"><span>STUDENT NAME</span></span>
              <div class="sign-up-rectangle2" style="width: 300px;">
                <input class="form-input" type="text" placeholder="Enter Full Name" id="studentName" name="studentName">
              </div>
              <span class="sign-up-text08"><span>EMAIL</span></span>
              <span class="sign-up-text10"><span><a href="LoginPage.php"> Already have an account</a></span></span>
              <div class="sign-up-rectangle3">
                <input class="form-input" type="text" placeholder="Enter Email" id="email" name="email">
              </div>
              <span class="sign-up-text12"><span>PASSWORD</span></span>
              <div class="sign-up-rectangle4">
                <input class="form-input" type="password" placeholder="Enter Password" id="password" name="password">
              </div>
              <span class="sign-up-text14"><span>RETYPE PASSWORD</span></span>
              <div class="sign-up-rectangle6">
                <input class="form-input" type="password" placeholder="Re-enter password" id="cpassword" name="cpassword">
              </div>
              <div class="sign-up-rectangle7"><button style="width: 179px; background-color: transparent; border-width: 0px; font-family: Poppins; font-size: 17px;" type="submit" name="submit"><span><a href="#"> Continue </a></span></button></div>
              <!-- <span class="sign-up-text16"><span><a href="#">   Continue   </a></span></span> -->
            </form>
          </div>
          <div class="sign-up-ellipse1">
            <img src="person-icon.png" alt="useraccountprofile2512127" class="login-page-useraccountprofile" />
          </div>

        </div>
      </div>
    </div>
  </div>

</body>

</html>