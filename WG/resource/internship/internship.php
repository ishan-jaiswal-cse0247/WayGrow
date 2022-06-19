<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayGrow Internship</title>
    <link rel ="shortcut icon" type = "image/png" href = "../../favicon.png">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="internship.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    <div class="header">
        <strong>INTERNSHIPS</strong>
    </div>



    <!-- ========= Browse Internships =========-->
    <section class="jobs">
        <div class="container">
            <div class="companies">


            <?php

session_start();
    error_reporting(0);

    $con = mysqli_connect('localhost','root','','waygrow');
    $sql = "select * from postedintern ";
    $result = mysqli_query($con, $sql);
    $chkresult = mysqli_num_rows($result);
    
    if($chkresult > 0){

        while($row = mysqli_fetch_assoc($result)){
            $logo = $row['logo'];
            $compname = $row['compname'] ;
            $title = $row['title'];
            $experience = $row['experience'];
            $location = $row['location'];
            $about = $row['about'];
            $requirement = $row['requirement'];
            $pay = $row['pay'];
            $time = $row['stamp'];

echo'

                <!-- 1 -->
                <div class="company-list">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="company-logo">
                                <img src="Image/'.$logo.'" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="company-content">
                                <h3>'.$title.'</h3>
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>'.$compname.'</span><span
                                        class="company-location"><i class="fa fa-cogs"></i> Experience- '.$experience.'
                                    </span><span class="package"><i class="fa fa-map-marker"></i>'.$location.'</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <!-- <button type="submit" class="btn view-job" name="View Job">View Job</button> -->
                            <h5>Posted '.$time.'</h5>
                        </div>
                        <!-- ======== More started 1 ========= -->
                        <details>
                            <summary>More</summary>
                            <h3>About</h3>
                            <p>'.$about.'
                            </p>
                            <div class="exp">
                                <h3>Experience<br></h3>
                                <ul>
                                    <li>'.$experience.'</li>
                                </ul>
                            </div>
                            <div class="skill">
                                <h3>Skills required</h3>
                                <ul>
                                '.$requirement.'
                                </ul>
                            </div>

                            <div class="Duration">
                                <h3>Duration and payout</h3>
                                <ul>
                                '.$pay.'
                                </ul>
                            </div>
                            <div>
                            <a href ="../oppapply.php">   <button type="button" class="btn btn-primary">Apply</button> </a>
                            </div>
                        </details>
                        <!-- ======== More Ended 1 ======== -->
                    </div>
                </div>
';}}?>
               
    <!-- ====== Browse Internship Ended ======= -->

    <div class="mend">
        <p>More Coming Soon....</p>
    </div>
    </section>



    <!-- ============= Footer Started ============ -->
    <div class="main"> </div>
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Way<span>Grow</span></h3>

            <p class="footer-links">
                <a href="../../index.php">Home</a>
                ·
                <a href="../contact/contact.php">Contact</a>
                .
                <a href="../pp&tc/pp.php"> Privacy Policy</a>
                ·
                <a href="../pp&tc/tc.php">T&C</a>
                ·
                <a href="../FAQ/faq.php">FAQ</a>
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
    <!-- ============= Footer Ended ============ -->
</body>

</html>