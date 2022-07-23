<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "absent_point";
   
   //Create Connection
   $conn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";
   
   try {
       $pdo = new PDO($conn, $username, $password);
   
       if ($pdo) {
           echo "";
       }
   } catch (PDOException $e) {
       echo $e->getMessage();
   }

   session_start();

   date_default_timezone_set("Asia/Jakarta");
    
?>