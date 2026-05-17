<?php

include 'db.php';

$id = $_GET['student_id'];


// GET OLD DATA
//oop
// $result = $conn->query("SELECT * FROM students WHERE student_id = $id");


//PDO
$result = $conn->prepare("SELECT * FROM students WHERE student_id = $id");
$result->execute();

//procedural
// $result = mysqli_query($conn,"SELECT * FROM students WHERE student_id = $id");




//oop
// $row = $result->fetch_assoc();

//procedural
// $row = mysqli_fetch_assoc($result);


//pdo
$row = $result->fetch(PDO::FETCH_ASSOC);



// UPDATE
if(isset($_POST['update'])){

    $name = $_POST['name'];

    $department = $_POST['department'];

    $year = $_POST['year'];


    $sql = "UPDATE students
    SET

    student_name='$name',
    department='$department',
    year='$year'

    WHERE student_id=$id";


    if($conn->query($sql) === TRUE){

        echo "Record Updated";
    }
}

?>



<form method="POST">

<input type="text"
name="name"
value="<?php echo $row['student_name']; ?>">

<br><br>

<input type="text"
name="department"
value="<?php echo $row['department']; ?>">

<br><br>

<input type="number"
name="year"
value="<?php echo $row['year']; ?>">

<br><br>

<button type="submit" name="update">
Update
</button>

</form>