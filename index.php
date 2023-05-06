<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>

<body>
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <h3><em>Let's</em><br> Learn</h3>
    </div>
    <a class="menu-link"><i class="fa fa-bars"></i></a>
    <nav class="main-nav">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">About Us</a></li>
        <li><a href="#features">Courses</a></li>
        <li><a href="#section6">Contact</a></li>
        <li><a href="LoginPage.php">Sign in</a></li>
      </ul>
    </nav>
  </header>
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>School of O/A Level Students</h6>
              <h2><em>Build</em> Skills.</h2>
              <h2><em>Excel</em> Your Exam.</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="LoginPage.php">Start Here</a></div>
              </div>
          </div>
      </div>
  </section>
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>All Courses</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Quality Videos</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Advance Teaching</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Lets Learn?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Quality Materials</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>Education is the process of acquiring knowledge, skills, and values that enable individuals to lead productive and fulfilling lives. It fosters critical thinking, problem-solving, creativity, and innovation, all of which are essential for success in today's rapidly evolving world. Education also promotes personal growth, social responsibility, and ethical behavior, helping individuals become active and engaged members of their communities.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Management</h4>
                    <p>Our platform create strategic plan for the platform that fulfills the needs of students and teachers. We create a positive and engaging user experience for students as well as implementing features that facilitate learning and collaboration. We work with teachers and administrators to ensure that the platform provides high-quality educational content. 
                      We develop partnerships and collaborations with other organizations to expand the reach and impact of the platform.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Materials</h4>
                    <p>We provide the lecture material in a way that is engaging and interactive,which include creating multimedia content such as videos, notes and interactive exercises that help to illustrate key concepts and make the material more engaging for students.
                      It is our responsibility to ensure that students have access to high-quality educational content that facilitates their learning and understanding of the subject matter.
                    </p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectionheading">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="col-md-6">                            
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright by Let's Learn </a></p>
        </div>
      </div>
    </div>
  </footer>
  <script src="assets/tabs.js"></script>
  <script src="assets/slick-slider.js"></script>
</body>
</html>
