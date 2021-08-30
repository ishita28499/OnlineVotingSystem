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
                                <h2>New User Page</h2>
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
                        <h2 class="contact-title">New User Page</h2>
                                                <?PHP
                        if(isset($_REQUEST["msg"]))
                        {
                        	echo("<h2 class='contact-title'>".$_REQUEST["msg"]."</h2>");
                        }
                        ?>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="AddNewUser.php" method="post">
                            <div class="row">
                                <!-- <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div> -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="firstname" id="firstname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter First Name'" placeholder="Enter First Name">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="lastname" id="lastname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Last Name'" placeholder="Enter Last Name">
                                    </div>
                                </div>                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phnum" id="phnum" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter PhoneNum'" placeholder="Enter PhoneNum">
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="lname" id="lname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Login Name'" placeholder="Enter Login Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="pwd" id="pwd" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Enter Password">
                                    </div>
                                </div>
                                
                                
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="voterid" id="voterid" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter VoterId'" placeholder="Enter VoterId">
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="filename" id="filename" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter VoterId'" placeholder="Enter Image">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="address" id="address" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder=" Enter Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">New User</button>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Ishita</h3>
                                <p>M S Ramaiha College</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+91 9886239083</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>ishita@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section> 
    
    
    
    <!-- <div class="gift-area gift-padding gift-overly" data-background="assets/img/memories/gft.jpg">
        <div class="container">
            <div class="row">
                <div class=" offset-lg-1 col-12">
                    <div class="gift-caption">
                        <h2>The Best Gift</h2>
                        <p>Will be your bresentation</p>
                        <a href="#" class="btn">R.S.V.P</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    
<footer>
        
          <div class="footer-main footer-bg">
            <!-- <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8">
                           <div class="single-footer-caption mb-50">
                             <div class="single-footer-caption mb-30">
                                  logo
                                 <div class="footer-logo">
                                     <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                 </div>
                                 <div class="footer-tittle">
                                     <div class="footer-pera">
                                         <p class="info1">Seddo eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    
                                         <p class="info2">theaisle@elated-themes.com</p>
                                         <p class="info2">+(123) 456 - 7890 - 456 - 7890</p>
                                         <p class="info2"> 35 W 46nd Street New York</p>
                                    </div>
                                 </div>
                             </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>WEDDING PLANNER FAQS</h4>
                                    <ul>
                                        <li><a href="#">Why Hire a Planner?</a></li>
                                        <li><a href="#">How Can I Make An</a></li>
                                        <li><a href="#">Appointment?</a></li>
                                        <li><a href="#">How to Choose a Venue</a></li>
                                        <li><a href="#">Event Catalogue</a></li>
                                        <li><a href="#"> Accept</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>ABOUT US</h4>
                                    <ul>
                                        <li><a href="#">Bridesmaids</a></li>
                                        <li><a href="#">November 22, 2020</a></li>
                                        <li><a href="#">Groomsmen</a></li>
                                        <li><a href="#">November 22, 2020</a></li>
                                        <li><a href="#">JEWELRY</a></li>
                                        <li><a href="#">November 22, 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
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