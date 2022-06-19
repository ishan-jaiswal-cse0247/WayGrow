<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Opportunity</title>
  <link rel ="shortcut icon" type = "image/png" href = "../../../favicon.png">    <link rel="stylesheet" href="form.css?v=<?php echo time();?>">
    <div class="login-box">
    <h2>Post your opportunity</h2>
</head>
<form action = "postserver.php" method = "post" class="postopp" enctype="multipart/form-data">
                 
                 <div class= "user-box">
                 <select class="user-opt" name = "type">
                 <option class="user-opt1" value="internship"> Internship </option> 
                 <option class="user-opt1" value="mission"> Mission </option>
                 </select> 
                 </div>
                  <div class="user-box">
                    <input type="text" name = "compname" placeholder="Company Name" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "compmail" placeholder="Company Email" required>
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
                    <input type="text" name = "duration" placeholder="Duration" required>
                  </div>
                  <div class="user-box">
                    <input type="text" name = "payout" placeholder="Payout" required>
                    <p class="resume"> Upload your company ID </p>
                  </div>
                    <input type="file" accept= ".png, .jpg, .jpeg, .pdf" name="file"/>
                    <div class="field btn">
                    <div class="btn-layer">
                    </div>
                    <a><span></span><span></span><span></span><span></span><input class = "btn1" type="submit" name = "submit" value="Submit"> </a>
                  </div>
                </form></div> 

</div>
</body>
</html>