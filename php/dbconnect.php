<?php
    $host ="localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "redemption";
    
   $dbconn = mysqli_connect($host, $db_user, $db_pass, $db_name);
   if(!$dbconn){
       mysql_error("Could not connect");
   }
?>