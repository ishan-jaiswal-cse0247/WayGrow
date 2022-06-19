<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Yinka Enoch Adedokun">
        <title>WayGrow Admin login</title>
        <link rel ="shortcut icon" type = "image/png" href = "../favicon.png"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="adminlogin.css">
    </head>
    <body>
        <div class="login">
            <h1>Admin Login</h1>
              <form action = "validation.php" method="post">
                <input type="text" name="usrname" placeholder="Username" required="required" />
                  <input type="password" name="password" placeholder="Password" required="required" />
                  <button type="submit" class="btn btn-primary btn-block btn-large">Sign In</button>
              </form>
          </div>
    </body>
</html>