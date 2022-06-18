<link rel="stylesheet" href="chpass.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<head>
<title>WayGrow</title>
  <link rel ="shortcut icon" type = "image/png" href = "favicon.png"> 
  </head>
<div class="form-inner">
                
<form action="#" method = "post" class="forgpass">
  <div class="field">

  <Header>Enter New Password </Header>
    <input type="password" name ="password" placeholder="New Password" required>
    <br>
    
    <input type="password" name ="conform" placeholder="Conform Password" required>
  </div>
  <div> 
    <br>
  <button type= "submit" name ="submit" class = "btn-primary btn-block"> Submit </button>  
</div> 

<?php 
 session_start();
 error_reporting(0);
 $con = mysqli_connect('localhost','root','','waygrow');
 
            if(isset($_POST['submit'])) {

                if(isset($_GET['token'])){
                $token = $_GET['token'];

                $password = $_POST['password'];
                $conform = $_POST['conform'];
                $cipher = md5($password);
                if($password != $conform){
                    echo("Password dosen't match");
                 }else{ 
                     $updatepass = "update logindb set password = '$cipher' where token = '$token' ";
                     $passchanged = mysqli_query($con, $updatepass);
                     if($passchanged){
                         echo ("congratulation, Your password has been changed");
                         //header("location : loginpage.php");
                     }
                 }
                 
                
        }else {
            echo("invalid token id");
        }}