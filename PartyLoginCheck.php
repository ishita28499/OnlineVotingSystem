<?PHP
session_start();
?>
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
            $sql="Select * from partytable where loginname = '$uname' and password like '$pwd'";
            $result= mysqli_query($con, $sql);
            echo "Affected Rows : ". mysqli_affected_rows($con)."<br>";
            if(mysqli_affected_rows($con)>0)
            {
                $row=mysqli_fetch_array($result);
                $_SESSION['partyid'] = $row['PartyId'];
                header("Location:PartyHomePage.php");
            }
            else
            {
                header("Location:PartyLogin.php?msg=Invalid UserName and Password");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        ?>
    </body>
</html>
