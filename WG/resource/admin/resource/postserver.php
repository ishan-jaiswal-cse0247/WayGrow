<?php
    //session_start();
    //error_reporting(0);
   //if(isset($_POST['submit']))

    $con = mysqli_connect('localhost','root','','waygrow');
    $to = "waygrow.ltd@gmail.com";
    $type = $_POST['type'];
    $compname = $_POST['compname'];
    $compmail = $_POST['compmail'];
    $location = $_POST['location'];
    $exp = $_POST['experience'];
    $about = $_POST['about'];
    $require = $_POST['requirement'];
    $duration = $_POST['duration'];
    $pay = $_POST['payout'];
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploaded_data/";
 
 $new_size = $file_size/1024;  
$new_file_name = strtolower($file);

 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
    $sql="INSERT INTO postopp(type,compname,compmail,location,experience,about,requirement,duration,payout,fname,ftype,fsize) VALUES('$type','$compname','$compmail','$location','$exp','$about','$require','$duration','$pay','$final_file','$file_type','$new_size')";
    //$postopp = "insert into postopp(type,compname,compmail,location,experence,about,requirement,duration,payout)values('$type','$compname','$compmail','$location','$exp','$about','$require','$duration','$pay')";
    if(mysqli_query($con,$sql,)){
    echo("Application submitted succesfully");
    //mail($to, $sub, $body, $compmail );
}else {
    echo "oops!!";
}}

?>