<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chosen-course-2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Montserrat:wght@500;700&family=Poppins:wght@500;700&display=swap"
        rel="stylesheet" />
    <title>Courses</title>
</head>

<body style="background-color: #12212f;font-family:poppins;">
    <div class="header">
        <div class="header-division">
            <span class="logo"><a href="index.php" style="text-decoration: none; color: #eee;">Let's<br><span
                        class="logo-style">Learn</span></a></span>
        </div>
        <div class="search-bar">
        <form action="" class="search-bar">
                <input type="text" placeholder="search" name="">
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
    <div class="title d-flex justify-content-between mt-4 ms-5">
        <h2 class="p-2 g-3" style=" margin-left:15px;color: #e1e1e1; display: inline-block; margin-bottom:26px;">CIE
            A-Level Mathematics</h2>
        <a href="#"><button onclick="toPurchase()" type="button" class="btn btn-info mb-3 me-5 mt-1 p-2" id="toBuy"><img
                    src="Icon/tag-icon.png"> Purchase</button></a>
    </div>

    <div id="parent" class="m-3">
        <div id="child">

        </div>
    </div>

    <hr style="height:2px;border-width:0;color:gray;background-color:gray;">
    <div class="content d-md-inline-flex align-items-center">
        <div class="content1" style="color:#e1e1e1; margin-left:50px;">
            <h2 style="margin-left:12px;">Free Tier Videos</h2>
            <div class="row mt-4">
                <div class="col-11">
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/hCuYAoditNA?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 1</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/-g8Hcfbap1Y?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 2</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/rWnYkrKmawg?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 3</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/TQqsGYWZDT8?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 4</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/Nvsf4Z7PHGA?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 5</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/xFN3pkL22_Y?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 6</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/xgd8fMO-OtQ?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 7</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/6Wq-bl22gDk?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 8</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/O3RrQ0e4yZs?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 9</a></button>
                    <button class="btn" style="margin-right: 15px; margin-bottom: 15px;"><a
                            href="https://youtu.be/zCAmNRmIzrc?list=PLS-TIpNmaiIANuyKQ_iuu4nH14ft5RK7e" class="p-2"
                            style="text-decoration: none;" target="_blank">Chapter 10</a></button>
                </div>
            </div>
        </div>
        <div class="content2">
            <h3 class="m-2" style="color:#e1e1e1;"><u>About this course:</u></h3>
            <div class="about-course ms-2 me-2 mb-2"
                style="padding: 30px;color:#252525;background-color: #00d989; margin-top: 60px; border-radius:8px; opacity:80%;font-size: 18px; word-wrap: break-word;">
                This playlist covers all the chapters that needs to be covered to ace your CIE Add Maths exam. Our
                teachers have designed the course contents in such a way so that it is easy for the students to grasp
                the concept and learn maths in a fun way! So why wait? Excel in your IGCSE exam for just<p>
                <h4>BDT999!</h4>
                </p>
            </div>
        </div>
    </div>

    <script src="chosen-course-2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>