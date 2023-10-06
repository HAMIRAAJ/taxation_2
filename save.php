<?php

include 'conn.php';


$name=$_POST['name'];

$email=$_POST['email']; 
$message=$_POST['message']; 


$sql= "insert into `form` (`name`,`email`,`message`)
VALUES ('$name','$email','$message')";
// echo $sql;
// die();
$result=mysqli_query($mysqli,$sql);

header("Location:http://localhost/taxation/Contact.php");
 

?>
