<?php
  if (isSet($_POST['submit']))
  {
    include 'connection.php';
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    $checkStudent = "SELECT * FROM student WHERE `email`  = '$userEmail' AND `password` = '$userPassword'";
    $result1 = mysqli_query($con, $checkStudent);

    $checkTeacher = "SELECT * FROM teacher where `email`  = '$userEmail' AND `password` = '$userPassword'";
    $result2 = mysqli_query($con, $checkTeacher);

    $checkAdmin= "SELECT * FROM admin where `email`  = '$userEmail' AND `password` = '$userPassword'";
    $result3 = mysqli_query($con, $checkAdmin);

    if (mysqli_num_rows($result1) == 1)
    {
      header('Location: studentDashboard.php');
    } 
    else if(mysqli_num_rows($result2) == 1) 
    {
      header('Location: TeacherDashboard.php');
    }
    else if(mysqli_num_rows($result3) == 1) 
    {
      header('Location: AdminDashboard.php');
    }
    else
    {
      echo "<script>alert('Invalid username or password')</script>";
    }
    mysqli_close($con);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Montserrat:wght@500;700&family=Poppins:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <title>Log In</title>
  </head>
  <body>
    <div>
      <link href="./login-page.css" rel="stylesheet" />
      <div>
        <div class="login-page-login-page">
          <div class="login-page-login-tray">
            <div class="login-page-rectangle1">
              <div class="login-page-line1"></div>
              <div class="login-page-line2"></div>
              <span class="login-page-text"
                ><span><a href="LoginPage.php">Login</a></span></span
              >
              <span class="login-page-text06"
                ><span><a href="SignUp.php">Sign Up</a></span>
              </span >
              <span class="login-page-text02"
                ><span>Forgot Password</span>
              </span>
              <form method="post">
                <span class="login-page-text04"><span>EMAIL</span></span>
                <div class="login-page-rectangle2">
                  <input class = "form-input" type="text" placeholder="Enter Email" id="email" name="email">

                </div>
                <span class="login-page-text08"><span>PASSWORD</span></span>
                <div class="login-page-rectangle3">
                  <input class = "form-input" type="password" placeholder="Enter Password" id="password" name="password">
                </div>
                <div class="login-page-rectangle7"></div>
                <span class="login-page-text10"><button style="width: 179px; background-color: transparent; border-width: 0px; font-family: Poppins; font-size: 17px; margin-left: -60px;" type="submit" name="submit"><span><a href="#"> Log In </a></span></button></span>
              </form>
            </div>
            <div class="login-page-ellipse1">
              <img
                src="person-icon.png"
                alt="useraccountprofile2512127"
                class="login-page-useraccountprofile"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
