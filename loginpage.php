<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WayGrow Login</title>
  <link rel ="shortcut icon" type = "image/png" href = "favicon.png"> 
  <link rel="stylesheet" href="loginpage.css?v<?php echo time();?>">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>

  <div class="banner">
    <nav>
      <input id="nav-toggle" type="checkbox">
      <div><img src="logo.png" class="logo" alt=""></div>
      <ul class="links">
        <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#loginn">Login/SignUp</a></li>
      </ul>
      <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </label>
    </nav>
<!-- ========Navbar Ended====== -->
 
<!-- ======= Login Page Started ========= -->
        <div id="loginn" class="box">
          <div class="wrapper">
            <div class="title-text">
              <div class="title login">
                Login </div>
              <div class="title signup">
                SignUp </div>
            </div>
            <div class="form-container">
              <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">SignUp</label>
                <div class="slider-tab">
                </div>
              </div>
                <div class="form-inner">
                <form action="validation.php" method = "post" class="login">
                <div class= "box">
                <select name = "type" class = "select-typ">
                 <option value="employee"> Employee </option> 
                 <option value="employer"> Employer </option>
                 </select> 
                 </div>
                  <div class="field">
                    <input type="text" name ="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                    <input type="password" name= "password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                    <a href="recovermail.php">Forgot password?</a>
                  </div>
                  <div class="field btn">
                    <div class="btn-layer">
                    </div>
                    <input type="submit" name = "loginuser" value="Login">
                  </div>
                  <div class="signup-link">
                    Not a member? <a href="">SignUp now</a></div>
                </form>
                <form action = "registration.php" method = "post" class="signup">
                 
                 <div class= "box">
                 <select name = "type" class= "select-typ">
                 <option value="employee"> Employee </option> 
                 <option value="employer"> Employer </option>
                 </select> 
                 </div>
                  <div class="field">
                    <input type="text" name = "name" placeholder="Full Name" required>
                  </div>
                  <div class="field">
                    <input type="email" name = "email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                    <input type="password" name = "password" placeholder="Password" required>
                  </div>
                  <div class="field">
                    <input type="password" name = "conform" placeholder="Confirm Password" required>
                  </div>
                  <br>
                  <div class= "check">
                  <style>
                  div {text-align: center;}
                  </style>
                  <input type="checkbox" name = "tandc" required> I have read and agree to the <a href= "resource/pp&tc/tc.php" > T&C </a><br> and accept <a href= "resource/pp&tc/pp.php" >Privacy Policy</a>
                  </div>
                  <div class="field btn">
                    <div class="btn-layer">
                    </div>
                    <input type="submit" name = "registeruser" value="SignUp">
                  </div>
                  <div class="login-link">
                    Alredy a member? <a href="">Login</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </header>










    <!-- ===== Login page Ended ===== -->
    </div>
    <!-- Banner ended -->
  

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Get Involved with WayGrow</h2>
      </div>
      <div>
        <ul class="about-img">
          <li><img src="Image/register.png">
            <figcaption>Register as a Seeker or as an HR</figcaption>
          </li>
          <li><img src="Image/search.png" alt="">
            <p>Find the right opportunity or candidate</p>
          </li>
          <li><img src="Image/take.png" alt="">
            <p>Apply for desired<br>Internship and Mission</p>
          </li>
          <li><img src="Image/logo.png" alt="">
            <p>Start earning and grow for Goal</p>
          </li>
        </ul>
      </div>
    </div>
  </section>


  <section>
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 class="page2h2">If opportunity doesn't knock the door, Build a Door</h2>
      </div>
      <div class="page2div1">
        <p>You’re here because you breathe better at elevation.You believe that sandwiches taste
          progressively better the
          farther you get from the trailhead. You sleep best with your head in the open air and the sound of a back
          country
          stream singing you to sleep. You discover both solace and adventure in the Great Outdoors.You crave adventure,
          growth, and new experiences. WayGrow is the go-to source for Internships and Missions at your home. In many
          cases the opportunities you’ll find on our site come with room and board to make it easy for you to seize the
          day
          and go for it.
          Whether you are still discovering your passion, need a seasonal career, or just feel the call to change paths,
          we’ve
          got everything you need to help you find your next great adventure.
        </p>
      </div>
      <div>
        <img src="image/about.png" class="page2div2" alt="">
      </div>

  </section>
  <!-- ===== End About Us Section ===== -->

  <!-- ===== Page 3 Heading1 ====-->
  <div class="page3">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Where you can get</h2>
      </div>
      <div>
        <img src="Image/company_logo.jpg" alt="">
      </div>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Stop Scrolling and Start Intervuing</h2>
        </div>
        <h3 class="hh3">1000's of opportunities are waiting for you</h3>
      </div>
    </div>
    <!-- ===== Page 3 Heading1 Ended====-->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>WayGrow</h3>
              <p>If opportunity doesn't knock the door, Build a Door</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>A108 Adam Street<br>Indore, IN 535022</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>info@WayGrow.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+91 5589 55488 55</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- ===== End Contact Section ===== -->

    <!-- ======= Footer started======= -->
    <div class="main"> </div>
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Way<span>Grow</span></h3>

        <p class="footer-links">
          <a href="indexcopy.php">Home</a>
          .
          <!-- <a href="#about"></a>
  · -->
          <a href="#contact">Contact</a>
          ·
          <a href="resource\pp&tc\pp.php">Privacy Policy</a>
          ·
          <a href="resource\pp&tc\tc.php">T&C</a>
          ·
          <a href="resource/FAQ/faq.php">FAQ</a>
        </p>

        <p class="footer-company-name">WayGrow Co. PVT. LTD. &copy; 2021</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Scheme No. 71</span> Indore, India</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 12345 45678</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:avipatidar12345@gmail.com">support@waygrow.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          WayGrow is technology company for Internships and Missions at your home.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
    <!-- ========== Footer Ended ========= -->

    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (() => {
        signupBtn.click();
        return false;
      });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"></script>

</body>

</html>