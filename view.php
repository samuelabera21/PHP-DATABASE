<?php
include 'db.php';

$sql = "select * from students join projects on students.student_id = projects.student_id";






//oop
// $result = $conn->query($sql);





//procedural
// $result = mysqli_query($conn,$sql);





//PDO
$result = $conn->prepare($sql);
$result->execute();





echo "<table border = '1'>";
echo"
<tr>
<th>student</th>
<th>project</th>
<th>hourly rate</th>
<th>department</th>
<th>year</th>
</tr>
";

//oop
// while($row= $result->fetch_assoc()){
//     echo"
//     <tr>
//     <td>".$row['student_name']."</td>
//     <td>".$row['project_name']."</td>
//     <td>".$row['hourly_rate']."</td>
//     <td>".$row['department']."</td>
//     <td>".$row['year']."</td>
//     </tr>
//     ";
// }




//procedural
// while($row = mysqli_fetch_assoc($result)){
//     echo"
//     <tr>
//     <td>".$row['student_name']."</td>
//     <td>".$row['project_name']."</td>
//     <td>".$row['hourly_rate']."</td>
//     <td>".$row['department']."</td>
//     <td>".$row['year']."</td>
//     </tr>
//     ";
// }





//PDO
while($row = $result->fetch(PDO::FETCH_ASSOC)){
echo"
<tr>
<td>".$row['student_name']."</td>
<td>".$row['project_name']."</td>
<td>".$row['hourly_rate']."</td>
<td>".$row['department']."</td>
<td>".$row['year']."</td>
</tr>

";
}
echo"</table>";

?>