<?PHP
session_start();
?>
<?php

        include './DBClass.php';
        try {
            $obj = new DBClass();
            $link = $obj->connect();


            
			$partyname = $_POST["partyname"];
			$presidentname = $_POST["presidentname"];
			$email = $_POST["email"];
			$lname = $_POST["lname"];
			$pwd = $_POST["pwd"];
			$phnum = $_POST["phnum"];
			$members = $_POST["members"];
			$filename = $_POST["filename"];
			$address = $_POST["address"];
			
			

			$sql = "INSERT INTO partytable(PartyName,PresidentName,EmailId,PhoneNum,Members,FileName,"
                                . "Address, LoginName, Password) "
                                . "values('$partyname','$presidentname','$email',"
                                . "'$lname','$pwd','$phnum','$members','$filename','$address')";
            
            
            
                                 $src = $obj->getsrcpath() . $filename;
            $dest = $obj->getdestpath() . $filename;
            copy($src, $dest);
			
			
			mysqli_query($link, $sql);
header("Location:NewParty.php?msg=New Party Registered Success");
   
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }


?>
