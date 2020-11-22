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
        </div>
        <!-- .site-mobile-menu -->


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
                            <span class="text-white"><strong>Create profile</strong></span>
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
                                <h2>Create profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-block btn-primary btn-md">Save resume</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <form class="p-4 p-md-5 border rounded" method="post">
                            <section class="multi_step_form">
                                <form id="msform">

                                    <fieldset>
                                        <h3 class="text-black mb-5 border-bottom pb-2">Personal details</h3>

                                        <h3 class="fs-subtitle">Tell us something more about you</h3>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="xyz">
                                        </div>
                                        <div class="form-group">
                                            <label for="f.name">Father name</label>
                                            <input type="text" class="form-control" id="f.name" placeholder="xyz">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" placeholder="xyz">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" placeholder="you@yourdomain.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input type="text" class="form-control" id="contact" placeholder="03xxxxxxx">
                                        </div>
                                        <div class="form-group">
                                            <label for="date of birth">Date of birth</label>
                                            <input type="text" class="form-control" id="date of birth" placeholder="xyz">
                                        </div>

                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <select class="selectpicker border rounded" id="religion" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Religion">
                      <option>Islam</option>
                      <option>Hinduism</option>
                      <option>Buddhism</option>
                      <option>Christianity</option>
                    
                    </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" class="form-control" id="nationality" placeholder="xyz">
                                        </div>


                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <div>
                                                <select class="selectpicker border rounded" id="gender" data-style="btn-black" data-width="100%" data-live-search="true" title="Select gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                      
                                      </select>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title">Social Profiles</h2>
                                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                                        <input type="text" name="twitter" placeholder="Twitter" />
                                        <input type="text" name="facebook" placeholder="Facebook" />
                                        <input type="text" name="gplus" placeholder="Google Plus" />
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    <fieldset>

                                        <h3 class="text-black my-5 border-bottom pb-2">Objective</h3>
                                        <div class="form-group">
                                            <label for="objective">Objective</label>
                                            <input type="text" class="form-control" id="objective" placeholder="xyz">
                                        </div>

                                        <div class="form-group">
                                            <label for="academic qualification">Academic qualification</label>
                                            <input type="text" class="form-control" id="academic qualification" placeholder="xyz">
                                        </div>

                                        <div class="form-group">
                                            <label for="your skills">Your skills</label>
                                            <input type="text" class="form-control" id="skills" placeholder="xyz">

                                        </div>

                                        <div class="form-group">
                                            <label for="work experience">Work experience</label>
                                            <input type="text" class="form-control" id="work experience" placeholder="xyz">
                                            <div class="form-group">

                                            </div>


                                        </div>


                                    </fieldset>
                                </form>
                            </section>
                            <div class="row align-items-center mb-5">

                                <div class="col-lg-4 ml-auto">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="btn btn-block btn-primary btn-md">Submit resume</a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <footer class="site-footer">

                                <a href="#top" class="smoothscroll scroll-top">
                                    <span class="icon-keyboard_arrow_up"></span>
                                </a>

                                <div class="container">
                                    <div class="row mb-5">
                                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                                            <h3>Search Trending</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Web Design</a></li>
                                                <li><a href="#">Graphic Design</a></li>
                                                <li><a href="#">Web Developers</a></li>
                                                <li><a href="#">Python</a></li>
                                                <li><a href="#">HTML5</a></li>
                                                <li><a href="#">CSS3</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                                            <h3>Company</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Career</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Resources</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                                            <h3>Support</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Support</a></li>
                                                <li><a href="#">Privacy</a></li>
                                                <li><a href="#">Terms of Service</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-md-3 mb-4 mb-md-0">
                                            <h3>Contact Us</h3>
                                            <div class="footer-social">
                                                <a href="#"><span class="icon-facebook"></span></a>
                                                <a href="#"><span class="icon-twitter"></span></a>
                                                <a href="#"><span class="icon-instagram"></span></a>
                                                <a href="#"><span class="icon-linkedin"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-12">
                                            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
                                        </div>
                                    </div>
                                </div>
                            </footer>


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