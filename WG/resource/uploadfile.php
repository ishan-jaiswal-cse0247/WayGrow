<?php
if(isset($_POST['submit']))
{   
   // $con = mysqli_connect('localhost','root','','waygrow');
    $con = mysqli_connect('localhost','root','','waygrow');
    $compname = $_POST['compname'];
    $position = $_POST['position'];
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $address = $_POST['address']; 
       
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
  $sql="INSERT INTO oppapply(compname,position,name,email,mob,address,resume,type,size) VALUES('$compname','$position','$name','$email','$mob','$address','$final_file','$file_type','$new_size')";
  mysqli_query($con,$sql);
  echo "Your application has been submited";
     }else{
  echo "Unable to submit your application";
		}
	}else{
      echo  "oops!!";
   }
?>