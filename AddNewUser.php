<?PHP
session_start();
?>
<?php
include './DBClass.php';
        try {
            $obj = new DBClass();
            $con = $obj->connect();
//            $uname = $_POST['uname'];
//            $pwd = $_POST['pwd'];
//            $sql="Select * from admintable where adminname = '$uname' and password like '$pwd'";
//            mysqli_query($con, $sql);
         
            
            		$firstname = $_REQUEST["firstname"];
			$lastname = $_REQUEST["lastname"];
			$email = $_REQUEST["email"];
			$lname = $_REQUEST["lname"];
			$pwd = $_REQUEST["pwd"];
			$phnum = $_REQUEST["phnum"];
			$voterid = $_REQUEST["voterid"];
			$filename = $_REQUEST["filename"];
			$address = $_REQUEST["address"];
			
			

			$sql = "INSERT INTO usertable(FirstName, LastName, EmailId, PhoneNum, VoterId, "
                                . "FileName,Address, LoginName, Password) values('$firstname','$lastname',"
                                . "'$email','$phnum','$voterid','$filename','$address','$lname','$pwd')";
			
			

                        $src = $obj->getsrcpath() . $filename;
            $dest = $obj->getdestpath() . $filename;
            copy($src, $dest);
			
			
			mysqli_query($con, $sql);
//			session.setAttribute("msg", "User Created Success");
			//response.sendRedirect("NewUser.jsp?msg=Party Registered Success");
header("Location:NewUser.php?msg=New Party Registered Success");
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
?>
