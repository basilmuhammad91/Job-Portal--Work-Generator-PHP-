<?php

include_once('dbconnect.php');

@session_start();

if(isset($_POST['logout']))
{
  unset($_SESSION['Employer_Id']);
  unset($_SESSION['Employer_Name']);
  unset($_SESSION['Employer_Email']);
  unset($_SESSION['Seeker_Id']);
  unset($_SESSION['Seeker_Name']);
  unset($_SESSION['Seeker_Email']);
}

if(isset($_SESSION['Employer_Name']) || isset($_SESSION['Seeker_Name']))
{
  header('location: index.php');
}

if(isset($_POST['login']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "
  select id, name, email, password, role from registerjobseeker where email = '$email' and password = '$password'
  union all
  select id, name, email, password, role from registeremployer where email = '$email' and password = '$password'
  ");

  $count = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);

  $role = $row['role'];

  if($count>0)
  {
    if($role == 'Employer')
    {
      $_SESSION['Employer_Id'] = $row[0];
      $_SESSION['Employer_Name'] = $row[1];
      $_SESSION['Employer_Email'] = $email;
      header('location: post-job.php');
    }
    else if($role == 'Job Seeker')
    {
      $_SESSION['Seeker_Id'] = $row[0];
      $_SESSION['Seeker_Name'] = $row[1];
      $_SESSION['Seeker_Email'] = $email;
      header('location: createprofile.php');
    }
  }
  else
  {
    echo "Error";
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">   
    
     
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <?php
    include_once('header.php');
    ?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up/Login</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-md-3">
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form method="post" class="p-4 border rounded">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" name="email" id="fname" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" name="password" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="login" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="button" class="btn btn-fb" style="color: white"><i style="background-color: #4267B2;" class="fa fa-facebook p-2 pl-3 pr-3"></i> <span style="color: #4267B2" class="pl-1">Login with facebook</span></button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    
    <?php
    include_once('footer.php');
    ?>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
   
   
     
  </body>
</html>