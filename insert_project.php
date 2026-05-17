<?php
include 'db.php';
$student_id = $_POST['student_id'];
$hourly_rate = $_POST['hourly_rate'];
$project_name = $_POST['project_name'];


$sql = ("insert into projects(student_id,hourly_rate,project_name)values('$student_id','$hourly_rate','$project_name')");


//oop
// if($conn->query($sql)===true){
//     echo "New project successfullyy added";
// }
// else{
//     echo "Error: " . $conn->error;
// }


//procedural
// if(mysqli_query($conn,$sql)){
//     echo "New project successfully aded";
// }
// else{
//     die ("error:".mysqli_error($conn));
// }


//PDO
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->execute())
{
    echo "New project successfully added";
}
?>