<?php
    session_start();
    error_reporting(0);

    $con = mysqli_connect('localhost','root','','waygrow');

    
    $result =  mysqli_query($con, $s);
    $logindb = mysqli_fetch_assoc($result);
    $usrname = $_POST['usrname'];
    $password = $_POST['password'];
    
    $password= md5($password);
    
    $s = "select * from admindb where usrname = '$usrname' && password = '$password'";
    
    if(isset($_POST['submit']));
    $result =  mysqli_query($con, $s,);
   
    if(mysqli_num_rows($result) > 0 ) {
        while($row = mysqli_fetch_assoc($result)){
            $usrname= $row["usrname"];
            $password= $row["password"];
        }
            header("location: /WG/sudo/home.php?usrname=$usrname");
        }else{
        echo("invalid email id, password or type");
        
    }
    

?>