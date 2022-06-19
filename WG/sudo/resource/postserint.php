<?php 
if(isset($_POST['submit']))

    $con = mysqli_connect('localhost','root','','waygrow');
    $logo = $_POST['logo'];
    $title = $_POST['title'];
    $compname = $_POST['compname'];
    $location = $_POST['location'];
    $exp = $_POST['experience'];
    $about = $_POST['about'];
    $require = $_POST['requirement'];
    $pay = $_POST['pay'];
    $token = $_POST['token'];
    $sql="INSERT INTO postedintern(logo,compname,title,location,experience,about,requirement,pay,token) VALUES('$logo','$compname','$title','$location','$exp','$about','$require','$pay','$token')";
    if(mysqli_query($con,$sql,)){
    echo("Posted succesfully");
    //mail($to, $sub, $body, $compmail );
}else {
    echo "oops!!";
}
?>