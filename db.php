<?php

//oop
// $conn = new mysqli("localhost","root" ,"","myself");
// if($conn->connect_error){
//     die("connection failed:".$conn->connect_error);
// }
// else{
//     echo "success!!";
// }
// echo "Error: " . $conn->error;



//procedural connection
// $conn = mysqli_connect("localhost","root","","myself");
// if(!$conn){
//     die("connection failed:".mysqli_connect_error());
// }




//PDO connection
try{
   $conn = new PDO("mysql:host=localhost;dbname=myself","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "connection failed:".$e->getMessage();
}
?>

