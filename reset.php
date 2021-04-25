<?php
session_start();
 $email=$_SESSION["email"];
 $newpass=$_POST["newpass"];

include_once "dbconnection.php";
 $data=new dbconn;

 if ($data !=null ){
     
    $result=$data->resetpassword($email, $newpass);
    echo "<h3>PASSWORD RESET SUCCESSFULLY</h3><br/>";
    echo "<a href='dashboard.php'>Back to Dashboard</a>";
    
 }


?>