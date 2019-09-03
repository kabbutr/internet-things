<?php
$servername = "localhost";
$username = "ladiesin_b1";
$password = "b1@2019";
$dbname = "ladiesin_batch1";

$conn=($servername,$username,$password,$dbname);

$sql1 = "DROP TABLE oit_p";
    if(mysqli_query($conn, $sql1)) {  
      echo "Table is deleted successfully";  
    } 
    else {  
         echo "Table is not deleted successfully\n";
    } 
    /*

$sql2 = "DROP TABLE admin_k";
    if(mysqli_query($conn, $sql2)) {  
      echo "Table is deleted successfully";  
    } 
    else {  
         echo "Table is not deleted successfully\n";
    } 
?>
*/