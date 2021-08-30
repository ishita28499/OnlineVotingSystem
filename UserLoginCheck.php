<?PHP
session_start();
?>
<?php



                        
                        
                        include './DBClass.php';
        try {
            $obj = new DBClass();
            $con = $obj->connect();
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $sql = "select * from usertable where loginname like '" . $uname . "' and password like '" . $pwd . "'";
            echo $sql;
            $result = mysqli_query($con, $sql);
            echo "Affected Rows : ". mysqli_affected_rows($con)."<br>";
            if(mysqli_affected_rows($con)>0)
            {
                $row = mysqli_fetch_array($result);
                $userid = $row['UserId'];
                $filename = $row['FileName'];
                $address = $row['Address'];
                $_SESSION['userid'] = $userid;
                $_SESSION['username']=$uname;
                $_SESSION['userfilename']=$filename;
                $_SESSION['address']=$address;
                header("Location:UserHomePage.php");
            }
            else
            {
                header("Location:UserLogin.php?msg=Invalid UserName and Password");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
?>
