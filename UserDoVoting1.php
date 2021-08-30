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

        <style type="text/css">

            table,tr,td,th
            {
                border:1px solid black;
                color:black;
                text-align: center;
            }

            td, th
            {
                color:black;
                width:100px;
                height:50px;
                text-align: center;
            }

        </style>

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
                            <!-- <img src="assets/img/our_story/flower_right.png" alt=""> -->
                            <h3>User Voting Page</h3>
                            <?PHP
                            $userid = "";
                            $username = "";
                            $userfilename = "";
                            $address = "";
                            $partyid = "";
                            $partyname = "";
                            $ministername = "";
                            ?>


                            <?PHP
							include 'DBClass.php';
                            try{
                            $obj = new DBClass();
                            $conn = $obj->connect();
                            $userid = $_SESSION["userid"];
                            $username = $_SESSION["username"];
                            $userfilename = $_SESSION["userfilename"];
                            $address = $_SESSION["address"];
                            $partyid = $_POST["partyid"];

                            $sql = "SELECT * FROM partytable where partyid =   $partyid";
                            //out.print(sql);

                            $result = $conn->query($sql);

                            if($row = mysqli_fetch_array($result))
                            {
                            $partyname = $row['PartyName'];
                            $ministername = $row[3];
                            }
                            $sql = "INSERT INTO votingtable(UserId,UserName,"
                            ."PartyId,PartyName,MinisterName,FileName,VotingStatus) "
                            . "values($userid, '$username', $partyid, '$partyname', '$ministername', '$userfilename', 'Voted')";
                            $conn->query($sql);

                            } catch (Exception $exc) {
                            echo $exc->getTraceAsString();
                            }
                            ?>

                            <p class="story1">
                            <table>
                                <tr>
                                    <th>Voter Id : </th>
                                    <td><?PHP echo $userid; ?></td>
                                    <th>User Name  </th>
                                    <td><?PHP echo $username; ?></td>
                                    <th>Address  </th>
                                    <td><?PHP echo $address; ?></td>
                                    <th>FileName  </th>
                                    <td> <img src="assets/img/<?PHP echo $userfilename; ?>" width="100px" height="100px"/> </td>
                                </tr>

                            </table>

                            <br>

                            </p>

                            <?PHP
                            print("<h3>Thank you for your vote</h3>");

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>



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