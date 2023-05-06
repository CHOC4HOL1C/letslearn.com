<?php
$login = false;
$showError = false;
$connection = mysqli_connect("localhost", "root", "", "letslearndb");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['search'])) 
{
    $email = $POST["email"];
    $password = $POST["password"];

    $sql ="SELECT * FROM `student` WHERE `email` = `$email` AND `password` = `$password`";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num == 1)
      {$login = true;}
  } 
  else {
    $showRrror = "Invalid Credentials!";
}
mysqli_close($connection);

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
              <form action="connection.php" method="post">
                <span class="login-page-text04"><span>EMAIL</span></span>
                <div class="login-page-rectangle2">
                  <input class = "form-input" type="text" placeholder="Enter Email" id="email" name="email">

                </div>
                <span class="login-page-text08"><span>PASSWORD</span></span>
                <div class="login-page-rectangle3">
                  <input class = "form-input" type="password" placeholder="Enter Password" id="password" name="password">
                </div>
                <div class="login-page-rectangle7"></div>
                <span class="login-page-text10"><span><a href="studentDashboard.php">Log In</a></span></span>
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
