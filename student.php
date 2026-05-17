<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <h2>Student Information</h2>
    <form action="insert_student.php" method="POST">
        <label for="name"> Full name</label>
        <input type="text" , id="name" , name="name" , required><br><br>
        <label for="phone"> phone</label>
        <input type="number" , id="phone" , name="phone" , required><br><br>
        <label for="email"> Email</label>
        <input type="email" , id="email" , name="email" , required><br><br>
        <label for="department"> Department</label>
        <input type="text" , id="department" , name="department" , required><br><br>
        <label for ="year"> Year</label>
        <input type="number" , id="year" , name="year" , required><br><br>
        <button type = "submit">submit</button>
    </form>
</body>

</html>