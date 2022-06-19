<html>
<head>
<title>Resume</title>
</head>
<?php
  $resumenamee= $_GET['resumename'];
  //echo "<a href =  $resumenamee target= resume </a>"; 
  

  // The location of the PDF file
  // on the server
  //$filename = "/path/to/the/file.pdf";
  
  // Header content type
  header("Content-type: application/pdf");
  
  header("Content-Length: " . filesize($resumenamee));
  
  // Send the file to the browser.
  readfile($resumenamee);
  
  
  
?>

</html>


