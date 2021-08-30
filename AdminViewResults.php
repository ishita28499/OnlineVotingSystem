<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Online Voting System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon"
              href="assets/img/favicon.ico">

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
            table, tr, td, th {
                border: 1px solid black;
                color: black;
                text-align: center;
            }

            td, th {
                color: black;
                width: 100px;
                height: 50px;
                text-align: center;
            }
        </style>

    </head>

    <body>


        <?PHP
        include './AdminHeader.php';
        ?>

    <main>
        <div class="Our-story-area story-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="story-caption">
                                <!-- <img src="assets/img/our_story/flower_right.png" alt=""> -->
                            <h3>Admin View Results Page</h3>
                            <p class="story1">
<!--							<%
                                            try {
                                                    DBClass obj = new DBClass();
                                                    Connection conn = obj.GetConn();

                                                    String sql = "SELECT PartyId, PartyName, MinisterName, FileName, COUNT(VotingStatus) AS COUNT FROM votingtable"
                                                                    + " GROUP BY partyid, partyname, ministername, filename";
                                                    //out.print(sql);
                                                    PreparedStatement ps = conn.prepareStatement(sql);

                                                    ResultSet rs = ps.executeQuery();
                                                    ResultSetMetaData res = rs.getMetaData();
                                                    out.print("<table>");
                                                    out.print("<tr>");
                                                    for (int i = 1; i <= res.getColumnCount(); i++) {
                                                            out.print("<th>" + res.getColumnName(i) + "</th>");
                                                    }
                                                    out.print("</tr>");
                                                    while (rs.next()) {
                                                            out.print("<tr>");
                                                            for (int i = 1; i < res.getColumnCount() - 1; i++) {
                                                                    out.print("<td>" + rs.getString(i) + "</td>");
                                                            }
                                                            out.print("<td><img src='assets/img/" + rs.getString("FileName")
                                                                            + "' width='100px' height='100px'/></td>");
                                                            out.print("<td>" + rs.getString("COUNT") + "</td>");
                                                            out.print("</tr>");
                                                    }

                                                    out.print("<table>");

                                            } catch (Exception ex) {
                                                    out.print("Exception : " + ex.getMessage());
                                            }
                                    %>-->



                                <?PHP
                                try {
                                    $con = mysqli_connect("localhost", "root", "", "OnlineVoting");
                                    echo "<table style='width:100%;'>";
                                    echo "<tr style='border:1px solid black; height:30px;'>";
                                    $sql1 = "Desc usertable";
                                    $sql = "SELECT PartyId, PartyName, MinisterName, FileName, COUNT(VotingStatus) AS COUNT FROM votingtable GROUP BY partyid, partyname, ministername, filename";

                                    $result = mysqli_query($con, $sql);
                                    $result1 = mysqli_query($con, $sql1);
                                    echo "<tr>";
                                    echo "<th style='border:1px solid black; height:20px;'>Party Id</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>Party Name</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>Miniter Name</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>File Name</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>Count</th>";
                                    echo "</tr>";
                                    while ($row = $result->fetch_assoc()) {
                                        //$sql1 = "DESC usertable";
                                        //$result1 = mysqli_query($con, $sql1);
                                        echo "<tr  style='border:1px solid black; height:30px;'>";
                                        //while ($row1 = mysqli_fetch_array($result1)) {                                        
                                        //if($row1['Field']=='FileName')
                                        echo "<td  style='border:1px solid black;'>" . $row['PartyId'] . "</td>";
                                        echo "<td  style='border:1px solid black;'>" . $row['PartyName'] . "</td>";
                                        echo "<td  style='border:1px solid black;'>" . $row['MinisterName'] . "</td>";
                                        echo "<td  style='border:1px solid black;'><img src='assets/img/" . $row['FileName'] . "' width='100px' height='100px'/></td>";
                                        echo "<td  style='border:1px solid black;'>" . $row['COUNT'] . "</td>";
                                        //else if($row1['Field']!='LoginName' && $row1['Field']!='PASSWORD')
                                        //echo "<td  style='border:1px solid black;'>" . $row[$row1['Field']] . "</td>";
                                        //}
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                } catch (Exception $exc) {
                                    echo $exc->getTraceAsString();
                                }
                                ?>
                            </p>


                            <h3>Winner IS</h3>
                            <p class="story1">
<!--							<%
                                            try {
                                                    DBClass obj = new DBClass();
                                                    Connection conn = obj.GetConn();

                                                    String sql = "SELECT PartyId, PartyName, MinisterName, FileName, COUNT(VotingStatus) AS COUNT FROM votingtable "
                                                                    + "GROUP BY partyid, partyname, ministername, filename ORDER BY COUNT(VotingStatus) DESC LIMIT 1";
                                                    //out.print(sql);
                                                    PreparedStatement ps = conn.prepareStatement(sql);

                                                    ResultSet rs = ps.executeQuery();
                                                    ResultSetMetaData res = rs.getMetaData();
                                                    out.print("<table>");
                                                    out.print("<tr>");
                                                    for (int i = 1; i <= res.getColumnCount(); i++) {
                                                            out.print("<th>" + res.getColumnName(i) + "</th>");
                                                    }
                                                    out.print("</tr>");
                                                    while (rs.next()) {
                                                            out.print("<tr>");
                                                            for (int i = 1; i < res.getColumnCount() - 1; i++) {
                                                                    out.print("<td>" + rs.getString(i) + "</td>");
                                                            }
                                                            out.print("<td><img src='assets/img/" + rs.getString("FileName")
                                                                            + "' width='100px' height='100px'/></td>");
                                                            out.print("<td>" + rs.getString("COUNT") + "</td>");
                                                            out.print("</tr>");
                                                    }

                                                    out.print("<table>");

                                            } catch (Exception ex) {
                                                    out.print("Exception : " + ex.getMessage());
                                            }
                                    %>-->

                                <?PHP
                                try {
                                    $con = mysqli_connect("localhost", "root", "", "OnlineVoting");
                                    echo "<table style='width:100%;'>";
                                    echo "<tr style='border:1px solid black; height:30px;'>";
                                    //$sql1 = "Desc usertable";                                
                                    $sql = "SELECT PartyId, PartyName, MinisterName, FileName, COUNT(VotingStatus) AS COUNT FROM votingtable "
                                            . " GROUP BY partyid, partyname, ministername, filename ORDER BY COUNT(VotingStatus) DESC LIMIT 1";

                                    $result = mysqli_query($con, $sql);
                                    $result1 = mysqli_query($con, $sql1);
                                    echo "<tr>";
                                    echo "<th style='border:1px solid black; height:20px;'>Party Id</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>Party Name</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>Miniter Name</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>File Name</th>";
                                    echo "<th style='border:1px solid black; height:20px;'>Count</th>";
                                    echo "</tr>";
                                    while ($row = $result->fetch_assoc()) {
                                        //$sql1 = "DESC usertable";
                                        //$result1 = mysqli_query($con, $sql1);
                                        echo "<tr  style='border:1px solid black; height:30px;'>";
                                        //while ($row1 = mysqli_fetch_array($result1)) {                                        
                                        //if($row1['Field']=='FileName')
                                        echo "<td  style='border:1px solid black;'>" . $row['PartyId'] . "</td>";
                                        echo "<td  style='border:1px solid black;'>" . $row['PartyName'] . "</td>";
                                        echo "<td  style='border:1px solid black;'>" . $row['MinisterName'] . "</td>";
                                        echo "<td  style='border:1px solid black;'><img src='assets/img/" . $row['FileName'] . "' width='100px' height='100px'/></td>";
                                        echo "<td  style='border:1px solid black;'>" . $row['COUNT'] . "</td>";
                                        //else if($row1['Field']!='LoginName' && $row1['Field']!='PASSWORD')
                                        //echo "<td  style='border:1px solid black;'>" . $row[$row1['Field']] . "</td>";
                                        //}
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                } catch (Exception $exc) {
                                    echo $exc->getTraceAsString();
                                }
                                ?>                                                    


                            </p>

                            <h3>Voters Percentage</h3>
                            <p class="story1">

<!--							<%! double totalcount, votingcount, nonvotingcount;%>

                                                        <%
                                                                try {
                                                                        totalcount = votingcount = nonvotingcount = 0;
                                                                        DBClass obj = new DBClass();
                                                                        Connection conn = obj.GetConn();

                                                                        String sql = "SELECT count(*) from usertable";
                                                                        //out.print(sql);
                                                                        PreparedStatement ps = conn.prepareStatement(sql);
                                                                        ResultSet rs = ps.executeQuery();

                                                                        if (rs.next())
                                                                                totalcount = Double.parseDouble(rs.getString(1));

                                                                        sql = "SELECT count(*) from votingtable";
                                                                        //out.print(sql);
                                                                        ps = conn.prepareStatement(sql);
                                                                        rs = ps.executeQuery();

                                                                        if (rs.next())
                                                                                votingcount = Double.parseDouble(rs.getString(1));

                                                                        nonvotingcount = totalcount - votingcount;
                                                                        
                                                                        out.print("<table>");
                                                                        out.print("<tr>");

                                                                        out.print("<th>Total Users Count</th>");
                                                                        out.print("<th> " + totalcount + " </th>");
                                                                        out.print("<th></th>");
                                                                        out.print("</tr>");

                                                                        out.print("<tr>");
                                                                        out.print("<th>Voters Count</th>");
                                                                        out.print("<th> " + votingcount + " </th>");
                                                                        out.print("<th>"+ Math.round(((votingcount*100)/totalcount) * 100.0) / 100.0 +"%</th>");
                                                                        out.print("</tr>");

                                                                        out.print("<tr>");

                                                                        out.print("<th>Non Voters Count</th>");
                                                                        out.print("<th> " + nonvotingcount + " </th>");
                                                                        out.print("<th>"+ Math.round(((nonvotingcount*100)/totalcount) * 100.0) / 100.0 +"%</th>");
                                                                        out.print("</tr>");
                                                                        out.print("<table>");

                                                                } catch (Exception ex) {
                                                                        out.print("Exception : " + ex.getMessage());
                                                                }
                                                        %>-->
                                <?PHP
                                $totalcount = 0;
                                $votingcount = 0;
                                $nonvotingcount = 0;
                                $sql = "SELECT count(*) as COUNT from usertable";
                                $con = mysqli_connect("localhost", "root", "", "OnlineVoting");
                                $result = mysqli_query($con, $sql);
                                if ($row = $result->fetch_assoc()) {
                                    $totalcount = $row['COUNT'];
                                }



                                $sql = "SELECT count(*) as COUNT from votingtable";
                                //out.print(sql);
                                $result = mysqli_query($con, $sql);

                                if ($row = $result->fetch_assoc()) {
                                    $votingcount = $row['COUNT'];
                                }
                                $nonvotingcount = $totalcount - $votingcount;


                                echo "<table style='width:100%;'>";
                                echo "<tr style='border:1px solid black; height:30px;'>";

                                echo("<th>Total Users Count</th>");
                                echo("<th> " . $totalcount . " </th>");
                                echo("<th></th>");
                                echo("</tr>");

                                echo("<tr>");
                                echo("<th>Voters Count</th>");
                                echo("<th> " . $votingcount . " </th>");
                                
                                echo("<th>" . round((($votingcount * 100) / $totalcount) * 100.0) / 100.0 . "%</th>");
                                echo("</tr>");

                                echo("<tr>");

                                echo("<th>Non Voters Count</th>");
                                echo("<th> " . $nonvotingcount . " </th>");
                                echo("<th>" . round((($nonvotingcount * 100) / $totalcount) * 100.0) / 100.0 . "%</th>");
                                echo("</tr>");
                                echo("<table>");

                                echo "</table>";
                                ?>

                            </p>



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="gift-area gift-padding gift-overly" data-background="assets/img/pic2.jpg">
            <div class="container">
                <div class="row">
                    <div class=" offset-lg-1 col-12">
                        <div class="gift-caption">
                            <h2>Online Voting</h2>
                            <p>Will be your bresentation</p>
                            <a href="#" class="btn">R.S.V.P</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --> </main>

<!--    <%-- <div style="position: absolute; bottom: 0px;">
        <jsp:include page="CommonFooter.jsp"></jsp:include>
    </div> --%>-->

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