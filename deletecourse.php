<?php
session_start();
 $email=$_SESSION["email"];
 

include_once "dbconnection.php";
 $data=new dbconn;

 if ($data !=null ){
    
    $result=$data->deletecourse($email);
    echo "<h3>Course Successfully Deleted</h3><br/>";
    echo "<a href='dashboard.php'>Back to Dashboard </a>";
 }


?>
