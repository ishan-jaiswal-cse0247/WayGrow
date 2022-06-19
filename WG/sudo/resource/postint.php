<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Opportunity | Admin </title>
  <link rel ="shortcut icon" type = "image/png" href = "../../favicon.png">    <link rel="stylesheet" href="form.css?v=<?php echo time();?>">
    <div class="login-box">
    <h2>Post opportunity</h2>
</head>
<form action = "postserint.php" method = "post" class="postopp">
                 
                 <div class= "user-box">
                 
                 </div>
                 <div class="user-box">
                    <input type="text" name = "logo" placeholder="Logo name" required>
                  </div> 
                 <div class="user-box">
                    <input type="text" name = "compname" placeholder="Company Name" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "location" placeholder="Location" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "experience" placeholder="Experence" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "about" placeholder="About" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "requirement" placeholder="Requirement" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "title" placeholder="Title" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "pay" placeholder="Pay and duration" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "token" placeholder="Token of user" required>
                  </div>
                 
                    <a><span></span><span></span><span></span><span></span><input class = "btn1" type="submit" name = "submit" value="Submit"> </a>
                  </div>
                </form>
</div>
</body>
</html>



