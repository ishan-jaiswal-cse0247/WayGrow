<?php
          $con = mysqli_connect('localhost','root','','waygrow');
          $sql = "DELETE FROM postedmiss WHERE compname='" . $_GET["compname"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ";
mysqli_close($con);
}
?>