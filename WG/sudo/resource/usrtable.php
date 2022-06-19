<html>
<head>
<title> </title>
</head>
<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All WG Users</title>
    <link rel ="shortcut icon" type = "image/png" href = "../../favicon.png">    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../data.css?v=<?php echo time();?>">
</head>
<table align ="center" border="1px" style="width:500px; line-height:30px;" class = "table">
<tr> 
<t> 
<th> Name </th>
<th> Email </th>
<th> Type </th>
<th> Token </th>
</t>
</tr>

<?php
session_start();
    error_reporting(0);
    $compname = $_GET['compname'];
    
    $con = mysqli_connect('localhost','root','','waygrow');
    $sql = "select * from logindb ";
    $result = mysqli_query($con, $sql);
    $chkresult = mysqli_num_rows($result);
    
    if($chkresult > 0){

        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'] ;
            $email = $row['email'];
            $type = $row['type'];
            $token = $row['token'];
echo'
            <tr>
<td>' .$name.' </td>
<td>  '.$email.' </td>
<td>  '.$type.' </td>
<td>  '.$token.' </td>
</tr>
';
        }    
    }else{
        echo 'nothing to show here';
    }
?>


    </body>
    </html>