<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="userdash.css">
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div><a href="../../index.php"><img src="logo.png" class="logo" alt=""></a></div>
        <ul class="links">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../about/about.php">About Us</a></li>
            <li><a href="../contact/contact.php">Contact Us</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <div class="header">
        <strong>DASHBOARD</strong>
    </div>
    <div class="profile_div">
        <img  class="profile_icon" src="Images/user_logo.png">
        <h3><?php error_reporting(0);
              if(isset($_SESSION['name'])){
                echo $_SESSION["name"] ;
              }else header ("location: ../../loginpage.php")  ?></h3>
    </div>

    <div class="details">
        <h2>Current Works</h2>
    </div>

    <!-- 1 -->
    <div class="mission-div1">
        <a href="studypal.php"><img src="Image/studypal.png" class="mimg1" alt=""></a>
        <h4 class="mh1">SOCIAL MEDIA MARKETING <pre><br> Approved 
           </h4>   
            <div class="mpost">
                <pre><b>                                        Posted</b><br><br>                                    2 Weeks ago</pre>
            </div>
    </div>

    <div class="details1">
        <h2>History</h2>
    </div>
    <div class="mission-div1">
        <h4 class="mh1"><br><br> Nothing to show here </h4>
    </div>

</body>

</html>