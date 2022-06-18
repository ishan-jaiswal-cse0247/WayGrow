<?php
    session_start();
    error_reporting(0);


    if(isset($_POST['loginuser']));

    $con = mysqli_connect('localhost','root','','waygrow');

    
    $result =  mysqli_query($con, $s);
    $logindb = mysqli_fetch_assoc($result);
    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $password= md5($password);
    
    $s = "select * from logindb where type = '$type' && email = '$email' && password = '$password'";
    
    if(isset($_POST['loginuser']));
    $result =  mysqli_query($con, $s,);
   
    if(mysqli_num_rows($result) > 0 ) {
        while($row = mysqli_fetch_assoc($result)){
            $name= $row["name"];
            $token= $row["token"];
            $_SESSION['name'] = $name;
            $_SESSION['token'] = $token;
        }
        if($type === "employee"){
         header("location: index.php");
        }elseif($type != "employee"){
            header("location: /WG/resource/admin/index.php");
        }
        }else{
        echo("invalid email id, password or type");
        
    }
    

?>