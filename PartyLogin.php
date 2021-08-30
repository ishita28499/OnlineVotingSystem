<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/slicknav.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    

<!--     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <header>
        
       <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        Logo
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            Main-menu
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>                              
                                    <ul id="navigation">    
                                        <li><a href="our_story.html"> Our Story</a></li>
                                        <li><a href="location.html">Location</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="booking.html">Guest Book</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> 
                        Mobile Menu
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        
    </header>
     -->

<?PHP
include './CommonHeader.php';
?>
    
    
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2  hero-overly d-flex align-items-center" data-background="assets/img/pic1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Party Login</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

    
     <section class="contact-section">
            <div class="container">
                
    
                
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Party Login Page</h2>
                        <?PHP
                        if(isset($_REQUEST["msg"]))
                        {
                        	echo("<h2 class='contact-title'>".$_REQUEST["msg"]."</h2>");
                        }
                        ?>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form"  method="post"  action="PartyLoginCheck.php">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="uname" id="uname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Admin Name'" placeholder="Enter Admin Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="pwd" id="pwd" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Enter Password">
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Party Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> 
    
    
    
<footer>
        
          <div class="footer-main footer-bg">
     
            
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                         <div class="row d-flex align-items-center">
                             <div class="col-xl-12 ">
                                 <div class="footer-copy-right text-center">
                                     <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This project is made by Manasa & Sharu
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
          </div>
    </footer>
 
    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
    
    </html>