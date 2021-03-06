<?php

include_once('dbconnect.php');
@session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">
 <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html"><b>WORK GENERATOR</b></a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="about.html">About</a></li>
                  <?php
                  if(isset($_SESSION['Employer_Name']))
                  {
                    ?>
                    <li class="has-children">
                    <a href="job-listings.php">Job Listings</a>
                      <ul class="dropdown">
                        <li><a href="postedjobs.php">My Posted Jobs</a></li>
                      </ul>
                    </a>
                  </li>
                    <?php
                  }
                  elseif(isset($_SESSION['Seeker_Name']))
                  {
                    ?>
                    <li class="has-children">
                    <a href="job-listings.php">Job Listings</a>
                      <ul class="dropdown">
                        <li><a href="postedjobs.php">My Favourite Jobs</a></li>
                      </ul>
                    </a>
                    </li>
                    <?php
                  }
                  else
                  {
                    ?>
                    <li><a href="job-listings.php">Job Listings</a></li>
                    <?php
                  }
                  ?>
              <li class="has-children">
                <a href="services.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-single.html">Service Single</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-single.html">Portfolio Single</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="faq.html">Frequently Ask Questions</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.php"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.php">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
             <?php
             if(isset($_SESSION['Employer_Name']))
             {
               ?>
               <div class="row">
                <a href="post-job.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>  
                <form action="login.php" method="post" class="ml-1">
                    <input type="submit" name="logout" value="Log Out" class="btn btn-primary border-width-2 d-none d-lg-inline-block">       
                </form>
                </div>
               <?php
             }
             else if(isset($_SESSION['Seeker_Name']))
             {
               ?>
                <form action="login.php" method="post">
                    <input type="submit" name="logout" value="Log Out" class="btn btn-primary border-width-2 d-none d-lg-inline-block">       
                </form>
               <?php
             }
             else
             {
             ?>
              <a href="login.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
             <?php
             }
             ?>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>
  </body>
  </html>
