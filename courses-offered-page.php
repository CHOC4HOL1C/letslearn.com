<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="courses-offered-page.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Montserrat:wght@500;700&family=Poppins:wght@500;700&display=swap"
    rel="stylesheet" />
  <title>Courses</title>
</head>

<body style="background-color: #12212f;font-family:poppins">
  <div class="header">
    <div class="header-division">
      <span class="logo"><a href="index.php" style="text-decoration: none; color: #eee;">Let's<br><span
            class="logo-style">Learn</span></a></span>
      <form action="course_search.php" class="search-bar" method = "post">
        <input type="text" placeholder="search" name="search">
        <button type="submit"><img src="Icon/search1.png" alt=""></button>
      </form>
    </div>
    <div class="user-pic">
    <div class="dropdown">
        <div class="dropbtn"><img src="Icon/user-pic.png"></div>
        <div class="dropdown-content">
          <a href="#">Profile</a>
          <a href="#">Settings</a>
          <a href="#">Logout</a>
        </div>
      </div><br>
      <h4>User</h4>
    </div>
  </div>

  <button class="btn mt-3 ms-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
    aria-controls="offcanvasWithBothOptions" style="background-color:#00d989;"><img src="Icon/menuBar.png"
      alt=""></button>

  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: #302f2f;">
    <div class="offcanvas-header" style="display: block;">
      <button type="button" class="btn-close float-end" data-bs-dismiss="offcanvas" aria-label="Close"
        style="background-color:#00d989;"></button>
    </div>
    <div class="offcanvas-body me-3">
      <div style="margin-bottom: 5%; margin-top: 40%; text-align: center;">
        <a href="index.php" class="btn btn-outline-info" role="button">
          <h4><img src="Icon/home.png" style="margin-bottom: 4px;" alt=""> Home</h4>
        </a>
      </div>
      <div style="margin-bottom: 5%; text-align: center;">
        <a href="#" class="btn btn-outline-info" role="button">
          <h4><img src="Icon/achievement.png" style="margin-bottom: 4px;" alt=""> Achievement</h4>
        </a>
      </div>
      <div style="margin-bottom: 5%; text-align: center;">
        <a href="courses-offered-page.php" class="btn btn-outline-info" role="button">
          <h4><img src="Icon/course.png" style="margin-bottom: 4px;" alt=""> Courses</h4>
        </a>
      </div>
      <div style="text-align: center;">
        <a href="#" class="btn btn-outline-info" role="button">
          <h4><img src="Icon/contact.png" style="margin-bottom: 4px;" alt=""> Contact Us</h4>
        </a>
      </div>
    </div>
  </div>

  <div class="mt-4 ms-5">
    <h2 class="p-2 g-3" style=" margin-left:15px;color: #e1e1e1; display: inline-block; margin-bottom:26px;">Courses
      Offered</h2>
  </div>

  <div class="btn-group ms-5 mt-1" data-bs-theme="dark">

    <button class="btn btn-custom2 dropdown-toggle ms-4 rounded"
      style="margin-left:2px;background-color:#00d989; color:#12212f" id="id1" type="button" data-bs-toggle="dropdown"
      aria-expanded="false">
      Edexcel
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
      <li><a class="dropdown-item" href="#"></a></li>
      <li><a class="dropdown-item" href="#">O' Level</a></li>
      <li><a class="dropdown-item" href="#">AS</a></li>
      <li><a class="dropdown-item" href="#">A2</a></li>
    </ul>
    <button class="btn btn-custom2 dropdown-toggle ms-4 rounded"
      style="margin-left:2px;background-color:#00d989;color:#12212f" id="id2" type="button" data-bs-toggle="dropdown"
      aria-expanded="false">
      CIE
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
      <li><a class="dropdown-item" href="#"></a></li>
      <li><a class="dropdown-item" href="#">O' Level</a></li>
      <li><a class="dropdown-item" href="#">AS</a></li>
      <li><a class="dropdown-item" href="#">A2</a></li>
    </ul>
  </div>

  <div class="row row-cols-1 row-cols-md-3 mt-5 ms-4 g-5 w-100">
    <div class="col">
      <div class="card border-0 h-100 w-70">
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/hCuYAoditNA"
          title="CIE IGCSE Additional Maths: Indices" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <div class="card-body"
          style="color:white; background-color: #2a4d6d;display: flex; justify-content: space-between; align-items: center;">
          <h5 class="card-title m-1" style="background-color:#2a4d6d;">CIE IGCSE Add Maths</h5>
          <a href="chosen-course-2.php" class="btn btn-outline-info p-3" role="button">View Course</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-0 h-100">
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/EvH-stL0BQs"
          title="A level Biology ENTIRE topic 6: Learn the whole topic - response, muscles, synapses &amp; homeostasis"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <div class="card-body"
          style="color:white; background-color:  #2a4d6d;display: flex; justify-content: space-between; align-items: center;">
          <h5 class="card-title" style="background-color:#2a4d6d;">A2 Biology: Unit 6</h5>
          <a href="chosen-course-3.php" class="btn btn-outline-info p-3" role="button">View Course</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-0 h-100">
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/TosrRomVUcg"
          title="A-Level Maths: 10 MINUTE TOPIC REVISION: Polynomials (AS Level Algebra)" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <div class="card-body"
          style="color:white; background-color: #2a4d6d;display: flex; justify-content: space-between; align-items: center;">
          <h5 class="card-title" style="background-color:#2a4d6d;">AS Mathematics: Polynomials</h5>
          <a href="chosen-course-4.php" class="btn btn-outline-info p-3" role="button">View Course</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-0 h-100">
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/L1URiY9xg8k"
          title="The whole of A Level Physics in about  12 hours  PHYSICS REVISION" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <div class="card-body"
          style="color:white; background-color: #2a4d6d;display: flex; justify-content: space-between; align-items: center;">
          <h5 class="card-title" style="background-color:#2a4d6d;">A2 Physics</h5>
          <a href="chosen-course-5.php" class="btn btn-outline-info p-3" role="button">View Course</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p class="bodytext">
      &copy; Let's Learn 2023. All Rights Reserved.
    </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>