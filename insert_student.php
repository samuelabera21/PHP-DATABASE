<?php
include 'db.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$department = $_POST['department'];
$year = $_POST['year'];


$sql = "insert into students(student_name,student_email,student_phone,department,year)values('$name','$email','$phone','$department','$year')";


//oop
// if($conn->query($sql)===true){
//     echo "New record created successfully";
// }
// else{
//     echo "Error: " . $conn->error;
// }




//procedural
// if(mysqli_query($conn,$sql)){
// die("New record created successfully");
// }
// else{
//     die ("error:".mysqli_error($conn)   );
// }




// PDO
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->execute()){                               
    echo "New record created successfully";
}

?>