<?php
$servername = "localhost";
$username = "ladiesin_b1";
$password = "b1@2019";
$dbname = "ladiesin_batch1";



$sql1 = "DROP TABLE oit_p";
    if(mysqli_query($conn, $sql1)) {  
      echo "Table is deleted successfully";  
    } 
    else {  
         echo "Table is not deleted successfully\n";
    } 

$sql2 = "DROP TABLE admin_k";
    if(mysqli_query($conn, $sql2)) {  
      echo "Table is deleted successfully";  
    } 
    else {  
         echo "Table is not deleted successfully\n";
    } 




// Create connection
/*$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql1 = "CREATE TABLE oit_p (
pid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(255) NOT NULL,
comment VARCHAR(255) NOT NULL,
email VARCHAR(255),
weblink VARCHAR(255),
image LONGBLOB
)";

if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql2 = "CREATE TABLE admin_k (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
aname VARCHAR(255) NOT NULL,
email VARCHAR(255),
password VARCHAR(255),

)";

if ($conn->query($sql2) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
8/*
