<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Opportunity</title>
    <link rel ="shortcut icon" type = "image/png" href = "../favicon.png">     <link rel="stylesheet" href="form.css">
</head>
<div class="login-box">
<h2> Apply for Opportunity</h2>

<body>
<form action="uploadfile.php" method="post" enctype="multipart/form-data">
                  <div class="user-box">
                    <input type="text" name = "compname" placeholder="Company Name" required>
                    </div>                  
                    <div class="user-box">
                    <input type="text" name = "position" placeholder="Position" required>
                  </div>
                    <div class="user-box">
                    <input type="text" name = "fullname" placeholder="Full Name" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "email" placeholder="Email Address" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "mob" placeholder="Mobile no" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "address" placeholder="Address" required>
                    <p class="resume"> Upload your Resume </p>
                  </div>
                    <input type="file" accept= ".pdf" name="file"/>
                    <div class="field btn">
                    <div class="btn-layer">
                    </div>
                    <a><span></span><span></span><span></span><span></span><input class = "btn1" type="submit" name = "submit" value="Submit"> </a>
                  </div>
                </form></div> 
</div> 
</body>
</html>