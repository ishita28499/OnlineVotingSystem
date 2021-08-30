<?php
class DBClass {

    var $host = 'localhost';
    var $user = 'root';
    var $pwd = '';
    var $db = 'onlinevoting';
    var $myconn;

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            //echo 'Connection established!';}
            return $this->myconn;
        }

        function close() {
            mysqli_close($myconn);
            echo 'Connection closed!';
        }
    }
    
    function getsrcpath()
    {
        //return "C:\\Users\\Computer\\Desktop\\Images\\";
        return "C:\\Users\\ProjectSystem\\Desktop\\Desktop\\Images";
    }
    
    function getdestpath()
    {
        //return "C:\\xampp\\xamp\\htdocs\\OnlineVotingSystem\\assets\\img\\";
        return "C:\\xampp\\htdocs\\OnlineVotingSystem\\assets\\img\\";
    }
}
?>