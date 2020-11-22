<?php

include_once('dbconnect.php');

if(isset($_POST['jobseekersignup']))
{
  $fname = $_POST['fname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $contact = $_POST['contact'];
  $role = 'Job Seeker';

    $query = mysqli_query($con, "insert into registerjobseeker (name, email, contact, username, password, role) values('$fname','$email','$contact','$uname','$password','$role')");

    if($query>0)
    {
      header('location: login.php');
    }
    else
    {
      $alert = "You have not registered";
    }


}

if(isset($_POST['employeesignup']))
{
  echo "Hello World";
  $fname = $_POST['fname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $contact = $_POST['contact'];
  $cname = $_POST['cname'];
  $caddress = $_POST['caddress'];
  $ccontact = $_POST['ccontact'];
  $noofemployees = $_POST['noofemployees'];
  $typeoforganization = $_POST['typeoforganization'];
  $statusdetails = $_POST['statusdetails'];
  $EIN = $_POST['ein'];
  $role = 'Employer';

    $query = mysqli_query($con, "insert into registeremployer (name, email, contact, username, password, companyname, companyaddress, companycontact, numberofemployees, typeoforganization, statusdetails, EIN, role) values('$fname','$email','$contact','$uname','$password', '$cname','$caddress','$ccontact','$noofemployees','$typeoforganization','$statusdetails','$EIN','$role')");

    if($query)
    {
      header('location: login.php');
    }
    else
    {
      $alert = "You have not registered";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

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
            <h1 class="text-white font-weight-bold">Sign Up</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Sign Up</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <!-- <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Sign Up To JobBoard</h2>
            <form action="#" class="p-4 border rounded">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Re-Type Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Re-type Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
          <div class="col-lg-6">
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form action="#" class="p-4 border rounded">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
        </div> -->
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Job Seeker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Employer</a>
              </li>
            </ul>
            <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
              <div class="row">
                <div class="col-lg-12">
                      <h2 class="mb-4"><b>Sign Up To WorkGenerator</b></h2>
                      <form action="register.php" method="post" class="p-4 border rounded">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Full Name</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter your Full Name">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Username</label>
                                <input type="text" id="fname" name="uname" class="form-control" placeholder="Enter your Username">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email</label>
                                <input type="text" name="email" id="fname" class="form-control" placeholder="Email address">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Password</label>
                                <input type="password" name="password" id="fname" class="form-control" placeholder="Password">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Re-Type Password</label>
                                <input type="password" name="rpassword" id="fname" class="form-control" placeholder="Re-type Password">
                                <span><?php echo @$alert?></span>
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Contact</label>
                                <input type="text" id="fname" name="contact" class="form-control" placeholder="Contact Number">
                              </div>
                            </div>
                          </div>
                        </div>
      
                        <div class="row form-group">
                          <div class="col-md-12">
                            <input type="submit" name="jobseekersignup" value="Sign Up" class="btn px-4 btn-primary text-white">
                          </div>
                        </div>

                      </form>
                </div>
              </div>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
      <div class="col-lg-12">
            <h2 class="mb-4"><b>Sign Up To WorkGenerator</b></h2>
            <form action="register.php" method="post" class="p-4 border rounded">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Full Name</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter your Full Name">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Username</label>
                                <input type="text" id="fname" name="uname" class="form-control" placeholder="Enter your Username">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email</label>
                                <input type="text" name="email" id="fname" class="form-control" placeholder="Email address">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Company Name</label>
                                <input type="text" name="cname" id="fname" class="form-control" placeholder="Enter your Company Name">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Company Address</label>
                                <input type="text" name="caddress" id="fname" class="form-control" placeholder="Company Address">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Company Contact</label>
                                <input type="text" name="ccontact" id="fname" class="form-control" placeholder="Company Contact">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Number of Employees</label>
                                <input type="text" name="noofemployees" id="fname" type="numbers" class="form-control" placeholder="Number of Employees">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Password</label>
                                <input type="password" name="password" id="fname" class="form-control" placeholder="Password">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Re-Type Password</label>
                                <input type="password" name="rpassword" id="fname" class="form-control" placeholder="Re-type Password">
                                <span class="text-danger"><?php echo @$alert?></span>
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Contact</label>
                                <input type="text" id="fname" name="contact" class="form-control" placeholder="Contact Number">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Type of Organization</label>
                                <input type="text" id="fname" name="typeoforganization" class="form-control" placeholder="Enter your Type of Organization">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Status Details</label>
                                <input type="text" id="fname" name="statusdetails" class="form-control" placeholder="Status Details">
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">EIN</label>
                                <input type="text" id="fname" name="ein" class="form-control" placeholder="Employer Identification Number">
                              </div>
                            </div>
                            
                          </div>
                        </div>
      
                        <div class="row form-group">
                          <div class="col-md-12">
                            <input type="submit" name="employeesignup" value="Sign Up" class="btn px-4 btn-primary text-white">
                          </div>
                        </div>

                      </form>
          </div>
    </div>
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