<?php 
if(isset($_POST['submit']))

    $con = mysqli_connect('localhost','root','','waygrow');
    $selin = $_POST['selin'];
    $token = $_POST['token'];
    $sql="INSERT INTO selectedin(selin,token) VALUES('$selin','$token')";
    if(mysqli_query($con,$sql,)){
    echo("Posted succesfully");
    //mail($to, $sub, $body, $compmail );
}else {
    echo "oops!!";
}
?>