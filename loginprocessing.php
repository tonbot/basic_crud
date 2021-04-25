<?php
 $email=$_POST["email"];
 $pass=$_POST["pass"];

include_once "dbconnection.php";
 $data=new dbconn;

 if ($data !=null ){
    
    $result=$data->login($email, $pass);
    if ($result == 1){
        session_start();
        $_SESSION["email"] = $email;
        header("location:dashboard.php");
    } else {
        echo "<h3>USER NOT FOUND</h3><br/>";
        echo "<a href='studentlogin.php'>Back to LOGIN</a>";
    
    }
 }


?>




