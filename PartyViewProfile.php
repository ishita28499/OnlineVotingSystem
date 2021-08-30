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
            table
            {
                width: 50%;
            }

        </style>

    </head>

    <body>


        <?PHP
        include './PartyHeader.php';
        ?>


    <main>
        <div class="Our-story-area story-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="story-caption">
                            <!-- <img src="assets/img/our_story/flower_right.png" alt=""> -->
                            <h3>Party View Profile Page</h3>
                            <p class="story1">

                                <?PHP
                                try {
                                    $con = mysqli_connect("localhost", "root", "", "OnlineVoting");
                                    $partyid = $_SESSION['partyid'];


                                    $sql = "SELECT * FROM partytable where partyid = $partyid";

                                    $result = mysqli_query($con, $sql);

                                    echo "<table style='width:100%;'>";
                                    if ($row = $result->fetch_assoc()) {
                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>Party Id</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['PartyId'] . "</td>";
                                        echo "</tr>";

                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>Party Name</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['PartyName'] . "</td>";
                                        echo "</tr>";

                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>President Name</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['PresidentName'] . "</td>";
                                        echo "</tr>";

                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>Email Id</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['EmailId'] . "</td>";
                                        echo "</tr>";

                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>Phone Num</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['PhoneNum'] . "</td>";
                                        echo "</tr>";


                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>Members</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['Members'] . "</td>";
                                        echo "</tr>";

                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>Address</th>";
                                        echo "<td  style='border:1px solid black;'>" . $row['Address'] . "</td>";
                                        echo "</tr>";

                                        echo "<tr style='border:1px solid black; height:30px;'>";
                                        echo "<th>FileName</th>";
                                        echo "<td  style='border:1px solid black;'><img src='assets/img/" . $row['FileName'] . "' width='100px' height='100px'/></td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                } catch (Exception $exc) {
                                    echo $exc->getTraceAsString();
                                }
                                ?>

<!--                            <%
                try {
                        String partyid = session.getAttribute("partyid").toString();
                        DBClass obj = new DBClass();
                        Connection con = obj.GetConn();

                        String sql = "select * from partytable where partyid=" + partyid;
                        //out.print(sql);
                        Statement st = con.createStatement();

                        ResultSet rs = st.executeQuery(sql);
                        ResultSetMetaData res = rs.getMetaData();

                        if (rs.next()) {
                                out.print("<table>");

                                for (int i = 1; i < res.getColumnCount(); i++) {
                                        out.print("<tr>");

                                        out.print("<th>" + res.getColumnName(i) + "</th>");
                                        out.print("<td>" + rs.getString(i) + "</td>");

                                        out.print("</tr>");
                                }

                                out.print("<tr>");

                                out.print("<th>Image</th>");
                                out.print("<td><img src='assets/img/"+ rs.getString("FileName") +"' width='100px' height='100px'/></td>");

                                out.print("</tr>");

                                
                                out.print("</table>");
                        }

                } catch (Exception ex) {
                        out.print("Exception : " + ex.getMessage());
                }
        %>-->

                            </p>

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