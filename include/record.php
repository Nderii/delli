<?php
//
if(!isset($_POST['submit'])){
    header("location: ../index.html?error=wrong_path");
    exit();
}
include ("dbcon.php");
//apa get the details from the form
    //get valuus from the form using real escape
    $fname= mysqli_real_escape_string($conn, $_POST['fname']);
    $lname= mysqli_real_escape_string($conn, $_POST['lname']);
    $oname= mysqli_real_escape_string($conn, $_POST['oname']);
    $filled= mysqli_real_escape_string($conn, $_POST['filled']);
    $ipass= mysqli_real_escape_string($conn, $_POST['ipass']);
    $race= mysqli_real_escape_string($conn, $_POST['race']);
    $dob= mysqli_real_escape_string($conn, $_POST['dob']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $pass= mysqli_real_escape_string($conn, $_POST['pass']);
    $pass2= mysqli_real_escape_string($conn, $_POST['pass2']);
    //CHECK IF PASSWORD REPEATE IS CORRECT

//check if Email THE USER IS USING A EMAIL THAT IS TAKEN

$sql= "SELECT * FROM rec WHERE Email=?"; 
$stmt=mysqli_stmt_init($conn);
//check if prepare is oky
if(!mysqli_stmt_prepare($stmt, $sql) ){
    header("location: ../index.html?error=SqlOne");
    exit();
 }
 else{
    mysqli_stmt_bind_param($stmt, "s",$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $recheck = mysqli_stmt_num_rows($stmt);
 //check for match
   if($recheck > 0){
    header("location: ../index.html?error=EmailUsed");
    exit();
}

 //else ENTER USER DATA TO THE DATABASE
else{
    $sql="INSERT INTO rec(FirstName, SecondName,OtherNames,Filled,Ipass,Race,Dob,Email,Pass) VALUES(?,?,?,?,?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
  //CHEK OF PREPARE IS OK
    if(!mysqli_stmt_prepare($stmt, $sql) ){
        header("location: ../index.html?error=sql2");
        exit();
     }
     /*TAKE DATA TO DATABASE*/
     else{

         //hash our password USING BCTYPT MD5 IN FAKE
         
       $hashedpass=password_hash($pass,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sssssssss",$fname,$lname,$oname,$filled,$ipass,$race,$dob,$email,$hashedpass);
        mysqli_stmt_execute($stmt);

        header("location: ../index.html?register=nimemaliza kutuma");
        exit();
        //user added to database

     }
}
}
