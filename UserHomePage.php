<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Online Voting System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       
 
 <?PHP
include './UserHeader.php';
?>
    
 
    <main>
        <div class="Our-story-area story-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="story-caption">    
                            <h3>User Home Page</h3>
                            <?PHP
                        $username = $_SESSION["username"];
                        echo("<h4>Welcome : "  . $username . "</h5>");
                        ?>
                            <p class="story1">An election is a formal group decision-making process by which a population chooses an individual to hold public office. It is usually used in Democratic nations.
</p>
                            <p class="story2">Elections have been the usual mechanism by which modern representative democracy has operated since the 17th century.[1] Elections may fill offices in the legislature, sometimes in the executive and judiciary, and for regional and local government. This process is also used in many other private and business organizations, from clubs to voluntary associations and corporations.
</p>

<p class="story1">
The universal use of elections as a tool for selecting representatives in modern representative democracies is in contrast with the practice in the democratic archetype, ancient Athens, where the Elections were not used were considered an oligarchic institution and most political offices were filled using sortition, also known as allotment, by which officeholders were chosen by lot.

</p>

<p class="story1">
Electoral reform describes the process of introducing fair electoral systems where they are not in place, or improving the fairness or effectiveness of existing systems. Psephology is the study of results and other statistics relating to elections (especially with a view to predicting future results).

</p>

<p class="story1">
To elect means "to select or make a decision", and so sometimes other forms of ballot such as referendums are referred to as elections, especially in the United States.

</p>

<p class="story1">
In Vedic period of India, the Raja (chiefs) of a gana (a tribal organization) was apparently elected by the gana. The Raja belonged to the noble Kshatriya varna (warrior class), and was typically a son of the previous Raja. However, the gana members had the final say in his elections. Even during the Sangam Period people elected their representatives by casting their votes and the ballot boxes (Usually a pot) were tied by rope and sealed. After the election the votes were taken out and counted. The Pala King Gopala (ruled c. 750s–770s CE) in early medieval Bengal was elected by a group of feudal chieftains. Such elections were quite common in contemporary societies of the region. In the Chola Empire, around 920 CE, in Uthiramerur (in present-day Tamil Nadu), palm leaves were used for selecting the village committee members. The leaves, with candidate names written on them, were put inside a mud pot. To select the committee members, a young boy was asked to take out as many leaves as the number of positions available. This was known as the Kudavolai system.

</p>

<p class="story1">
The modern "election", which consists of public elections of government officials, didn't emerge until the beginning of the 17th century when the idea of representative government took hold in North America and Europe.

</p>


<p class="story1">
Questions of suffrage, especially suffrage for minority groups, have dominated the history of elections. Males, the dominant cultural group in North America and Europe, often dominated the electorate and continue to do so in many countries. Early elections in countries such as the United Kingdom and the United States were dominated by landed or ruling class males. However, by 1920 all Western European and North American democracies had universal adult male suffrage (except Switzerland) and many countries began to consider women's suffrage. Despite legally mandated universal suffrage for adult males, political barriers were sometimes erected to prevent fair access to elections
</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        </div>
        <!-- our Memories End-->
        <!-- Gift Start -->
        <!-- Gift End -->

    
    
    
    </main>
    
    
    <!-- 
   <footer>
      <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
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
        </div>
        
        
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This project was designed by Ishitha 
  </p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
      </div> -->
     <!-- Footer End
   </footer>-->
   
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
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
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