<?php

include_once('dbconnect.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  
}
  $query = mysqli_query($con, "select * from jobpost where id = '$id'");
  $row = mysqli_fetch_array($query);
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
            <h1 class="text-white font-weight-bold"><?php echo $row['jobtitle']?></h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php echo $row['jobtitle']?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <!-- <img src="data:image/jpeg;base64,<?php echo base64_encode($row['logo'])?>" alt="Image"> -->
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['logo'])?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div>
                <h2><?php echo $row['jobtitle']?></h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo $row['companyname']?></span>
                  <span class="m-2"><span class="icon-room mr-2"></span><?php echo $row['jobregion'] ?></span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php echo $row['jobtype'] ?></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
            <?php
                if(@$_SESSION['Employer_Id'] == $row[1])
                {
                  ?>
                    <div class="col-6 offset-6">
                      <a href="post-job.php?id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-md">Edit Now</a>
                    </div>
                  <?php
                }
                else
                {
                  ?>
                    <div class="col-6"> 
                      <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                      </div>
                      <div class="col-6">
                        <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                    </div>
                  <?php
                }
                ?> 
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5 desc">
            <figure class="mb-5"><img src="data:image/jpeg;base64,<?php echo base64_encode($row['featureimage'])?>" alt="Image" class="img-fluid rounded"></figure>
              <?php echo $row['jobdescription'] ?>
              <br>
              <?php echo $row['companydescription'] ?>
            </div>
            <!-- <div class="mb-5">
              <figure class="mb-5"><img src="images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.</p>
              <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!</p>
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia officiis dolor</span></li>
              </ul>
            </div> -->

            <div class="row mb-5">
            <?php
            if(@$_SESSION['Employer_Id'] == $row[1])
            {   
              ?>
                <div class="col-6">
                  <a href="post-job.php?id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-md">Edit Now</a>
                </div>
            </div>
              <?php
            }
            else
            {
              ?>
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                  </div>
                  <div class="col-6">
                    <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                  </div>
                </div>
              <?php
            }
            ?>
              

          </div>
          <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> <?php echo date("m-d-Y", strtotime($row['publisheddate']))?></li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong> <?php echo  $row['vacancy'] ?></li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php echo $row['jobtype']?></li>
                <li class="mb-2"><strong class="text-black">Experience:</strong> <?php echo $row['experience'] ?> year(s)</li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php echo $row['location'] ?></li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> $<?php echo $row['salary'] ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $row['gender'] ?></li>
                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php echo date("m-d-Y", strtotime($row['applicationdeadline']))?></li>
              </ul>
            </div>

            <div class="bg-light p-3 border rounded">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
              <div class="px-3">
                <a href="www.facebook.com/<?php echo $row['facebookusername'] ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                <a href="www.twitter.com/<?php echo $row['twitterusername'] ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                <a href="www.linkedin.com/<?php echo $row['linkedinusername'] ?>" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                <!-- <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a> -->
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
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>

     <script>
     $(document).ready(function(){
       $('.desc h1,.desc h2,.desc h3,.desc h4,.desc h5').addClass('h5 d-flex align-items-center mb-4 text-primary');
       $(".desc h1,.desc h2,.desc h3,.desc h4,.desc h5").css("text-transform","capitalize");
     });
     </script>
  </body>
</html>