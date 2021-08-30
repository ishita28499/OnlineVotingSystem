<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './DBClass.php';
        try {
            $obj = new DBClass();
            $con = $obj->connect();
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $sql="Select * from admintable where adminname = '$uname' and password like '$pwd'";
            mysqli_query($con, $sql);
            echo "Affected Rows : ". mysqli_affected_rows($con)."<br>";
            if(mysqli_affected_rows($con)>0)
            {
                header("Location:AdminHomePage.php");
            }
            else
            {
                header("Location:AdminLogin.php?msg=Invalid UserName and Password");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        ?>
    </body>
</html>
