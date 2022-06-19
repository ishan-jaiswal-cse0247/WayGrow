<?php   
session_start();
if(isset($_SESSION["loginuser"]))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayGrow About</title>
  <link rel ="shortcut icon" type = "image/png" href = "../../../../favicon.png">    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="admindash.css">
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div><a href="../../index.php"><img src="logo.png" class="logo" alt=""></a></div>
        <ul class="links">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../about/about.php">About</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="hello.svg" alt="" />
            <div class="main__greeting">
              <h1>Hello <?php error_reporting(0);
              if(isset($_SESSION['name'])){
                echo $_SESSION["name"] ;
              }else header ("location: ../../../../loginpage.php")  ?></h1>
              <p>Welcome to your Employer dashboard</p>
              <a href = "../../../../logout.php"><button type="button" class="btn btn-primary">Log out </button></a>
            </div>
          </div>


    <div class="main__cards">
        <div class="card">
          <!-- <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i> -->
          <img class="img1" src="send.png" alt="">
          <div class="card_inner">
            <p class="text-primary-p"><b>On going</b></p>
            <span class="font-bold text-title"></span>
          </div>
          
          <p class="text-primary-p">You can view all of your posted opportunities in respective tabs. </p>


          </div>

        <div class="card">
          <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
          <div class="card_inner">
            <p class="text-primary-p">History </p>
            <span class="font-bold text-title"></span>
          </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>