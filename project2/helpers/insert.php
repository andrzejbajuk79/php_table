<?php 
require_once 'database.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

// $sql = "INSERT INTO persons (first_name, last_name) VALUES ('$first_name', '$last_name')";

 $sql = "INSERT INTO persons(first_name, last_name)VALUES ('$first_name', '$last_name')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>