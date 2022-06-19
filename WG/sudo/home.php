<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayGrow Admin Home</title>
  <link rel ="shortcut icon" type = "image/png" href = "../favicon.png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css?v<?php echo time();?>">
  <center><b>  <?php echo $_GET['usrname'];?>
</head>
<body>
    <div class="btn">
    <div class="btn1">
   <a href = "resource/postint.php"> <button type="button" class="btn btn-primary">Post Internship</button></a>
</div>
<div class ="btn2">
<a href = "resource/postmiss.php"><button type="button" class="btn btn-primary">Post Mission</button></a>
</div>
<div class="btn3">
<a href = "resource/refdash.php"> <button type="button" class="btn btn-primary">Select Cadidate</button></a>
<div class="btn4">
<a href = "resource/logout.php"> <button type="button" class="btn btn-primary">Logout</button></a>
<div class="btn5">
<a href = "resource/usrtable.php"> <button type="button" class="btn btn-primary">User Table</button></a>
</div>
</div>
</body>
</html>