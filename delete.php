<?php

include 'db.php';

$id = $_GET['student_id'];

// $sql = "delete from students where student_id = $id";

// if($conn->query($sql)===TRUE){
// echo "record deleted successfully";
// }
// else{
//     echo "Error: " ;
// }



// delete child table first
$conn->query("DELETE FROM projects WHERE student_id = $id");


// then delete parent table
$conn->query("DELETE FROM students WHERE student_id = $id");


echo "Record Deleted";



?>