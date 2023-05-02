<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentDashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <title>Student Dashboard</title>
</head>

<body style="background-color: #12212f;">

    <!-- Navbar -->
    <div class="header">
        <div class="header-division">
            <span class = "logo"><a href="index.php" style="text-decoration: none; color: #eee;">Let's<br><span class = "logo-style">Learn</span></a></span> 
            <form action="" class="search-bar">
                <input type="text" placeholder="search" name="">
                <button type="submit"><img src="Icon/search1.png" alt=""></button>
            </form>
        </div>
        <div class="user-pic">
            <img src="Icon/user-pic.png"><br>
            <h4>User</h4>
        </div>
    </div>

    <!-- Offcanvas -->
    <button class="btn mt-3 ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
        aria-controls="offcanvasWithBothOptions" style="background-color:#00d989;"><img src="Icon/menuBar.png" alt=""></button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel" style="background-color: #302f2f;">
        <div class="offcanvas-header" style="display: block;">
            <button type="button" class="btn-close float-end" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color:#00d989;"></button>
        </div>
        <div class="offcanvas-body me-3">
            <div style="margin-bottom: 5%; margin-top: 40%; text-align: center;">
                <a href="index.php" class="btn btn-outline-info" role="button"><h4><img src="Icon/home.png" style="margin-bottom: 4px;" alt=""> Home</h4></a>
            </div>
            <div style="margin-bottom: 5%; text-align: center;">
                <a href="#" class="btn btn-outline-info" role="button"><h4><img src="Icon/achievement.png" style="margin-bottom: 4px;" alt=""> Achievement</h4></a>
            </div>
            <div style="margin-bottom: 5%; text-align: center;">
                <a href="courses-offered-page.php" class="btn btn-outline-info" role="button"><h4><img src="Icon/course.png" style="margin-bottom: 4px;" alt=""> Courses</h4></a>
            </div>
            <div style="text-align: center;">
                <a href="#" class="btn btn-outline-info" role="button"><h4><img src="Icon/contact.png" style="margin-bottom: 4px;" alt=""> Contact Us</h4></a>
            </div>
        </div>
    </div>

    <!-- Continue learning cards -->
    <div class="mt-4 ms-3">
        <h2 class="ms-2 p-2" style="color: #e1e1e1; display: inline-block; border: 0px;">Continue Learning</h2>
    </div>

    <div class="ms-3 mt-1 mb-5 me-3 row row-cols-1 row-cols-md-4 g-4">
        
        <div class="col">
          <div class="card text-bg-dark h-100" style="border-color: transparent;">
            <iframe height="315" 
                src="https://www.youtube.com/embed/fB_qemv3xpk" title="Exam Hack | CIE A-Level Maths | Mechanics | Differential/Integral Motion Question" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>
            <div class="card-body">
              <h5 class="card-title">CIE A-Level Maths (Mechanics)</h5>
              <p class="card-text">Ch-2: Differential/Integral Motion</p>
            </div>
            <div class="card-footer">
                <small class="text-bg-dark"><span class="text-warning">Last Watched 15 mins ago</span><span class="float-end text-info"><i>10 mins left</i></span></small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-bg-dark h-100" style="border-color: transparent;">
            <iframe height="315"
                src="https://www.youtube.com/embed/SbqXqQ-2ixs?list=PL04uZ7242_M5R4J79nzuq4u7GT6_WYv1M" title="The CPU and Von Neumann Architecture" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">CIE A-Level Computer Science</h5>
              <p class="card-text">Ch-13: The CPU and Von Neumann Architecture</p>
            </div>
            <div class="card-footer">
                <small class="text-bg-dark"><span class="text-warning">Last Watched 2 days ago</span><span class="float-end text-info"><i>Completed</i></span></small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-bg-dark h-100" style="border-color: transparent;">
            <iframe height="315" 
                src="https://www.youtube.com/embed/lXZ2w4RBQ48?list=PLdGMDNpl5tB_p90iHKRTteJphFpYWJwVi" title="CIE A-Level Chemistry | Enthalpy changes 1 - formation and combustion cycle, Hess&#39; law | Lesson" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">CAIE A-Level Chemistry</h5>
              <p class="card-text">Ch-15: Enthalpy Changes</p>
            </div>
            <div class="card-footer">
                <small class="text-bg-dark"><span class="text-warning">Last Watched few seconds ago</span><span class="float-end text-info"><i>27 mins left</i></span></small>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-bg-dark h-100" style="border-color: transparent;">
            <iframe height="315" 
                src="https://www.youtube.com/embed/RjY5bZ4Bl8o?list=PLSygKZqfTjPC3hJ7nRSnnXTw3tI_o67dR" title="A Level Physics Revision: All of Electromagnetism (in under 40 minutes! )" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">CIE A-Level Physics</h5>
              <p class="card-text">Ch-28: Electromagnetism</p>
            </div>
            <div class="card-footer">
                <small class="text-bg-dark"><span class="text-warning">Last Watched 7 hours ago</span><span class="float-end text-info"><i>7 mins left</i></span></small>
            </div>
          </div>
        </div>

    </div>

    <hr class="border border-danger border-2 opacity-50">

    <!-- My Courses cards -->
    <div class="mt-4 ms-3">
        <h2 class="ms-2 p-2" style="color: #e1e1e1; display: inline-block;">My Courses</h2>
    </div>

    <div class="ms-3 mt-1 mb-5 me-3 row row-cols-1 row-cols-md-4 g-4">
        
        <div class="col">
            <div class="card text-bg-dark h-100" style="border-color: transparent;">
                <iframe height="315" 
                    src="https://www.youtube.com/embed/eaNeyq4iEkw?list=PLkocNW0BSuEEMyVUCyaRPVj_cahCvjxAr" title="SnapRevise: The Ultimate A-level Biology Resource" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
              <div class="card-body">
                <div>
                    <h5 class="card-title">CIE A-Level</h5>
                    <h5 class="card-title">Biology</h5>
                </div>
              </div>
              <div class="card-footer">
                  <small class="text-bg-dark"><span class="text-warning">Unwatched</span><span class="float-end text-info"><i></i></span></small>
              </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>