<link rel="stylesheet" href="chpass.css?v=<?php echo time ();?>">
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

                  <Header>Enter Email to reset password</Header>
                    <input class = "box" type="text" name ="email" placeholder="Email " required>
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

                $email = $_POST['email'];
                $s = "select * from logindb where email = '$email'";
                $result =  mysqli_query($con, $s);
                $mailfound = mysqli_num_rows($result);
                if($mailfound){
                  
                  $userdata = mysqli_fetch_array($result);
                  $name = $userdata['name'];
                  $token = $userdata['token'];
                  $subject = "Rest your password";
                  $body = "Hey $name , Looks like you forgot youur password. click on the link to reset your password
                  http://localhost/wg/newpass.php?token=$token";
                  $from = "From: waygrow.ltd@gmail.com";
                  if(mail ($email, $subject, $body, $from)){
                    echo("reset password mail has been sent to the mail");
                  }else{
                    echo("Unable to send mail");
                  }
                   
                }else{
                    echo("mail not found");
                }

            }

?>