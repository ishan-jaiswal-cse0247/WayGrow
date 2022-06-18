<?php
    session_start();
    error_reporting(0);

    $con = mysqli_connect('localhost','root','','waygrow');
    $type = $_POST['type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform = $_POST['conform'];
    $token = bin2hex(random_bytes(16));
    $emailcheck = "select * from logindb where email = '$email'";
    $mailquery = mysqli_query($con, $emailcheck);
    $mailcount = mysqli_num_rows($mailquery);
    if($password != $conform){
        echo("Password dosen't match");
      }else{
        if($mailcount>0){
            echo("Email alredy exist");
        }else{
    $_SESSION['name'] = $name;
    $_SESSION['token'] = $token;
    $s = "select * from logindb where name = '$name'";

    $result =  mysqli_query($con, $s);
    $logindb = mysqli_fetch_assoc($result);
    $cipher = md5($password);

    $reg =  "insert into logindb (type, name, email, password, token) values ('$type','$name', '$email', '$cipher', '$token')";
    mysqli_query($con, $reg);
    if($type === "employee"){
        header("location: index.php");
       }elseif($type != "emplyee"){
           header("location: /WG/resource/admin/index.php");
       }
    
        
        

}}
?>