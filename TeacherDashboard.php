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
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacher-styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  </head>
  <body>
    <div class="navbar-div">
      <span class="logo"
        ><a href="index.php"
          >Let's<br /><span class="logo-style">Learn</span></a
        ></span
      >

      <nav>
        <ul class="nav-links" id="navbar">
          <li style="padding-right: 0px"><a href="#">User</a></li>
          <li class="dropdown-tray">
            <div class="dropdown">
              <button class="dropbtn">
                <img class="user-icon-img" src="person-icon.png" />
              </button>
              <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">Settings</a>
                <a href="LoginPage.php">Logout</a>
              </div>
            </div>
          </li>
          <li class="hidden-contact"><a href="#">Contact Me</a></li>
        </ul>
        <div class="menu-btn" onclick="toggle(); return false;">
          <i class="fas fa-bars"></i>
        </div>
      </nav>
    </div>

    <div class="burger-button"></div>

    <div class="subheading">
      <h1>Teaching</h1>
    </div>

    <div class="card-row">
      <div class="card-item">
        <img class="card-image" src="./pictures/MathsD.jpg" />
        <div class="card-item-text">
          <h5>CIE O Level</h5>
          <h2>Maths D</h2>
        </div>
      </div>
      <div class="card-item">
        <img class="card-image" src="./pictures/MathsB.jpg" />
        <div class="card-item-text">
          <h5>Pearson IGCSE</h5>
          <h2>Maths B</h2>
        </div>
      </div>
      <div class="card-item">
        <img class="card-image" src="./pictures/AdMath.jpg" />
        <div class="card-item-text">
          <h5>CIE O Level</h5>
          <h2>Additional Math</h2>
        </div>
      </div>
      <div class="card-item">
        <img class="card-image" src="./pictures/P1Math.jpg" />
        <div class="card-item-text">
          <h5>CIE A Level</h5>
          <h2>P1: Pure Math</h2>
        </div>
      </div>
    </div>

    <div class="subheading">
        <h1>Publish Content</h1>
    </div>

    <div class="card-row" style="height: auto; ">
        <div class="card-item">
          <div class="card-item-text admin-stat-text" style="flex-direction: row; justify-content: space-between; height: 100%;">
            <h2>Add New<br><br><br>Course</h2>
            <a href="toRequest.php" target="_blank"><button style="background-color: transparent; border: none; cursor: pointer;"><img src="icons/plus.png" style="height: 30px; width: 30px" ></button></a>
          </div>
        </div>
        <div class="card-item">
            <div class="card-item-text admin-stat-text" style="flex-direction: row; justify-content: space-between;">
              <h2>Add New<br><br><br>Lesson</h2>
              <a href=""><button style="background-color: transparent; border: none; cursor: pointer;"><img src="icons/plus.png" style="height: 30px; width: 30px" ></button></a>
            </div>
          </div>
    </div>


    <div class="subheading">
      <h1>Stats</h1>
      <div style="display: flex; justify-content: center">
        <button class="stats-button">Days</button>
        <button class="stats-button">Weeks</button>
        <button class="stats-button">Months</button>
      </div>
    </div>

    <div class="card-row" style="height: 70%">
      <div class="card-item" style="width: 50%;">
        <div>
          <canvas id="minutes-watched-chart"></canvas>
        </div>
      </div>
      <div class="card-item" style="width: 50%;">
        <div>
            <canvas id="students-chart"></canvas>
        </div>
      </div>
    </div>

    <footer style="position: fixed; bottom: 0">
      <p class="bodytext" style="margin-left: 50px">
        &copy; Let's Learn 2023. All Rights Reserved.
      </p>
    </footer>

    <script src="teacher-stats-students.js"></script>
    <script src="teacher-stats-minutes.js"></script>
    <script src="script.js"></script>
  </body>
</html>
