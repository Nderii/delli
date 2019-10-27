<?php
//hii ni ya ku connect pekeeeee
//keep it in "inclucde folder" and just call it when needed
//natumia mysqli

//dbconnect
$host="localhost";
$user="root";
$pass="";
$db_name="alan";
//remeber to use this "conn" variable kila place
$conn=mysqli_connect($host,$user,$pass,$db_name);


if(!$conn){
 die ( "connection error: ".mysqli_connect_error());
}


?>

