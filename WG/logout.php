<?php
session_start();
session_unset();
header("location: loginpage.php");

session_destroy();

header("location: loginpage.php");
?>