<?php

include_once('dbconnect.php');
@session_start();

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $query = mysqli_query($con, "select * from jobpost where id = '$id'");
  $std = mysqli_fetch_array($query);

  if(@$_SESSION['Employer_Id'] !== $std[1])
  {
    header("location: job-single.php?id=$std[0]");
    @$std = "";
  }
}

if(!isset($_SESSION['Employer_Name']))
{
  header('location: index.php');
}

if(isset($_POST['savejob']))
{
  $employerid = $_SESSION['Employer_Id'];
  $featureimage = addslashes(file_get_contents($_FILES['featureimage']['tmp_name']));
  $email = $_POST['email'];
  $jobtitle = $_POST['jobtitle'];
  $location = $_POST['location'];
  $jobregion = $_POST['jobregion'];
  $jobtype = $_POST['jobtype'];
  $jobdescription = $_POST['jobdescription'];
  $companyname = $_POST['companyname'];
  $tagline = $_POST['tagline'];
  $companydescription = $_POST['companydescription'];
  $website = $_POST['website'];
  $facebookusername = $_POST['facebookusername'];       
  $twitterusername = $_POST['twitterusername'];
  $linkedinusername = $_POST['linkedinusername'];
  $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
  $publisheddate = date("m/d/Y");
  $gender = $_POST['gender'];
  $applicationdeadline = $_POST['applicationdeadline'];
  $salary = $_POST['salary'];
  $vacancy = $_POST['vacancy'];
  $experience = $_POST['experience'];

  $query = mysqli_query($con, "insert into jobpost (employerid, featureimage, email, jobtitle, location, jobregion, jobtype, jobdescription, companyname, tagline, companydescription, website, facebookusername, twitterusername, linkedinusername, logo, publisheddate, gender, applicationdeadline, salary, vacancy, experience) values('$employerid','$featureimage','$email','$jobtitle','$location','$jobregion','$jobtype','$jobdescription','$companyname','$tagline','$companydescription','$website','$facebookusername','$twitterusername','$linkedinusername','$logo','$publisheddate','$gender','$applicationdeadline','$salary','$vacancy','$experience')") or die(mysqli_error($con));

  if($query>0)
  {
    echo "Job Added";
  }
  else
  {
    echo "Error";
  }

}

if(isset($_POST['updatejob']))
{
  $id = $_POST['id'];
  $Isfeatureimage = isset($_FILES['featureimage']) && $_FILES['featureimage']['error'] != UPLOAD_ERR_NO_FILE;
  $email = $_POST['email'];
  $jobtitle = $_POST['jobtitle'];
  $location = $_POST['location'];
  $jobregion = $_POST['jobregion'];
  $jobtype = $_POST['jobtype'];
  $jobdescription = $_POST['jobdescription'];
  $companyname = $_POST['companyname'];
  $tagline = $_POST['tagline'];
  $companydescription = $_POST['companydescription'];
  $website = $_POST['website'];
  $facebookusername = $_POST['facebookusername'];       
  $twitterusername = $_POST['twitterusername'];
  $linkedinusername = $_POST['linkedinusername'];
  $Islogo = isset($_FILES['logo']) && $_FILES['logo']['error'] != UPLOAD_ERR_NO_FILE;
  $publisheddate = date("m/d/Y");
  $gender = $_POST['gender'];
  $applicationdeadline = $_POST['applicationdeadline'];
  $salary = $_POST['salary'];
  $vacancy = $_POST['vacancy'];
  $experience = $_POST['experience'];

  if($Isfeatureimage && $Islogo)
  {
    $featureimage = addslashes(file_get_contents($_FILES['featureimage']['tmp_name']));
    $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));

    $query = mysqli_query($con, "update jobpost set featureimage = '$featureimage', email = '$email', jobtitle = '$jobtitle', location = '$location', jobregion = '$jobregion', jobtype = '$jobtype', jobdescription = '$jobdescription', companyname = '$companyname', tagline = '$tagline', companydescription = '$companydescription', website = '$website', facebookusername = '$facebookusername', twitterusername = '$twitterusername', linkedinusername = '$linkedinusername', logo = '$logo', publisheddate = '$publisheddate', gender = '$gender', applicationdeadline = '$applicationdeadline', salary = '$salary', vacancy = '$vacancy', experience = '$experience' where id = '$id'") or die(mysqli_error($con));
  }

  else if($Isfeatureimage)
  {
    $featureimage = addslashes(file_get_contents($_FILES['featureimage']['tmp_name']));

    $query = mysqli_query($con, "update jobpost set featureimage = '$featureimage', email = '$email', jobtitle = '$jobtitle', location = '$location', jobregion = '$jobregion', jobtype = '$jobtype', jobdescription = '$jobdescription', companyname = '$companyname', tagline = '$tagline', companydescription = '$companydescription', website = '$website', facebookusername = '$facebookusername', twitterusername = '$twitterusername', linkedinusername = '$linkedinusername', publisheddate = '$publisheddate', gender = '$gender', applicationdeadline = '$applicationdeadline', salary = '$salary', vacancy = '$vacancy', experience = '$experience' where id = '$id'") or die(mysqli_error($con));
  }

  else if($Islogo)
  {
    $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));

    $query = mysqli_query($con, "update jobpost set email = '$email', jobtitle = '$jobtitle', location = '$location', jobregion = '$jobregion', jobtype = '$jobtype', jobdescription = '$jobdescription', companyname = '$companyname', tagline = '$tagline', companydescription = '$companydescription', website = '$website', facebookusername = '$facebookusername', twitterusername = '$twitterusername', linkedinusername = '$linkedinusername', logo = '$logo', publisheddate = '$publisheddate', gender = '$gender', applicationdeadline = '$applicationdeadline', salary = '$salary', vacancy = '$vacancy', experience = '$experience' where id = '$id'") or die(mysqli_error($con));
  }
  
  else
  {
    $query = mysqli_query($con, "update jobpost set email = '$email', jobtitle = '$jobtitle', location = '$location', jobregion = '$jobregion', jobtype = '$jobtype', jobdescription = '$jobdescription', companyname = '$companyname', tagline = '$tagline', companydescription = '$companydescription', website = '$website', facebookusername = '$facebookusername', twitterusername = '$twitterusername', linkedinusername = '$linkedinusername', publisheddate = '$publisheddate', gender = '$gender', applicationdeadline = '$applicationdeadline', salary = '$salary', vacancy = '$vacancy', experience = '$experience' where id = '$id'") or die(mysqli_error($con));
  }

  if($query)
  {
    header("location: job-single.php?id=$std[0]");
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
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
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
              <div>
                <h2>Post A Job</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
              </div>
            </div> -->
          </div>
        </div>
        <form class="p-4 p-md-5 border rounded" method="post" enctype="multipart/form-data">
        <div class="row mb-5">
          <div class="col-lg-12">
            
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
              
              <div class="form-group">
                <label for="company-website-tw d-block">Upload Featured Image</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  <input type="hidden" name="id" value="<?php echo @$std[0]?>">
                  Browse File<input accept="Image/*" type="file" name="featureimage" id="featureimage" hidden>
                </label><br>
                <img src="" id="featureimagetag" class="img-thumbnail" height="200px" width="200px" />
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="<?php echo @$std['email']?>" name="email" class="form-control" id="email" placeholder="you@yourdomain.com">
              </div>
              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" value="<?php echo @$std['jobtitle'] ?>" name="jobtitle" class="form-control" id="job-title" placeholder="Product Designer">
              </div>
              <div class="form-group">
                <label for="job-location">Location</label>
                <input type="text" name="location" value="<?php echo @$std['location'] ?>" class="form-control" id="job-location" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="job-region">Job Region</label>
                <select name="jobregion" class="selectpicker border rounded" id="job-region" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region">
                      <option>Anywhere</option>
                      <option <?php if(@$std['jobregion'] == "Sindh") echo "selected"?>>Sindh</option>
                      <option <?php if(@$std['jobregion'] == "Punjab") echo "selected"?>>Punjab</option>
                      <option <?php if(@$std['jobregion'] == "Balochistan") echo "selected"?>>Balochistan</option>
                      <option <?php if(@$std['jobregion'] == "Khyber Pakhtunkhwa") echo "selected"?>>Khyber Pakhtunkhwa</option>
                    </select>
              </div>

              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select name="jobtype" class="selectpicker border rounded" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option <?php if(@$std['jobtype'] == "Part Time") echo "selected"?>>Part Time</option>
                  <option <?php if(@$std['jobtype'] == "Full Time") echo "selected"?>>Full Time</option>
                </select>
              </div>


              <div class="form-group">
                <label for="job-description">Job Description</label>
                <div class="editor">
                  <textarea name="jobdescription" cols="137" id="editor-1"><?php echo @$std['jobdescription']?></textarea>
                </div>
                <!-- <div class="editor" id="editor-1">
                  <p name="jobdescription">Write Job Description!</p>
                </div> -->
              </div>


              <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
              <div class="form-group">
                <label for="company-name">Company Name</label>
                <input name="companyname" value="<?php echo @$std['companyname'] ?>" type="text" class="form-control" id="company-name" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="company-tagline">Tagline (Optional)</label>
                <input name="tagline" value="<?php echo @$std['tagline']?>" type="text" class="form-control" id="company-tagline" placeholder="e.g. New York">
              </div>

              <div class="form-group">
                <label for="job-description">Company Description (Optional)</label>
                <div class="editor">
                  <textarea name="companydescription" cols="137" id="editor-2"><?php echo @$std['companydescription'] ?></textarea>
                </div>
                <!-- <div class="editor">
                <textarea name="companydescription" cols="137" id="editor-1">Description</textarea>
                </div> -->
              </div>
              
              <div class="form-group">
                <label for="company-website">Website (Optional)</label>
                <input name="website" value="<?php echo @$std['website'] ?>" type="text" class="form-control" id="company-website" placeholder="https://">
              </div>

              <div class="form-group">
                <label for="company-website-fb">Facebook Username (Optional)</label>
                <input name="facebookusername" value="<?php echo @$std['facebookusername'] ?>" type="text" class="form-control" id="company-website-fb" placeholder="companyname">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Twitter Username (Optional)</label>
                <input name="twitterusername" value="<?php echo @$std['twitterusername'] ?>"  type="text" class="form-control" id="company-website-tw" placeholder="@companyname">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Linkedin Username (Optional)</label>
                <input name="linkedinusername" value="<?php echo @$std['linkedinusername'] ?>"  type="text" class="form-control" id="company-website-tw" placeholder="companyname">
              </div>

              <div class="form-group">
                <label for="Gender">Gender</label>
                <select name="gender" class="selectpicker border rounded" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option <?php if(@$std['gender'] == "Male") echo "selected"?>>Male</option>
                  <option <?php if(@$std['gender'] == "Female") echo "selected"?>>Female</option>
                  <option <?php if(@$std['gender'] == "Any") echo "selected"?>>Any</option>
                </select>
              </div>

              <div class="form-group">
                <label for="company-website-tw">Application Deadline</label>
                <input name="applicationdeadline" value="<?php echo @$std['applicationdeadline'] ?>" type="date" class="form-control" id="company-website-tw" placeholder="Application Deadline">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Salary</label>
                <input name="salary" value="<?php echo @$std['salary'] ?>" type="text" class="form-control" id="company-website-tw" placeholder="Salary in dollars">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Vacancy</label>
                <input name="vacancy" value="<?php echo @$std['vacancy']?>" type="numbers" class="form-control" id="company-website-tw" placeholder="Number of Jobs Available">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Experience</label>
                <input name="experience" value="<?php echo @$std['experience'] ?>" type="text" class="form-control" id="company-website-tw" placeholder="Experience in years">
              </div>

              <div class="form-group">
                <label for="company-website-tw d-block">Upload Logo</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Browse File<input name="logo" id="logo" onchange="loadFile(event)" accept="Image/*" type="file" hidden>
                </label><br>
                <img src="" id="logotag" class="img-thumbnail" height="150px" width="150px" />
              </div>
          </div>
          </div>
        <div class="row align-items-center mb-5">
          
          <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <?php
                if(isset($_GET['id']))
                {
                  ?>
                  <input type="submit" name="updatejob" value="Update Job" class="btn btn-block btn-primary btn-md">
                  <?php
                }
                else
                {
                  ?>
                  <input type="submit" name="savejob" value="Post Job" class="btn btn-block btn-primary btn-md">
                  <?php
                }
                ?>
                
              </div>
            </div>
          </div>
        </div>
        </form>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
     <script>
       var editor = CKEDITOR.replace( 'editor-1', {
        height: 290, 
        },
      );
      var editor2 = CKEDITOR.replace( 'editor-2', {
        height: 270, 
        },
      );
      CKEDITOR.instances['editor-1'].setData();
      CKEDITOR.instances['editor-2'].setData();

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#featureimagetag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
      }
      $("#featureimage").change(function(){
          readURL(this);
      });

      var loadFile = function(event) {
      var output = document.getElementById('logotag');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

     </script>
  
     
  </body>
</html>