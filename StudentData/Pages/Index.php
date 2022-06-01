<!DOCTYPE html>
<html>

<head>
    <title>Student Data</title>
    <link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>

<body>
    <div class="heading">
        <h1>Student Informtion</h1>
        </div>
        <button class="addition"><a href="../Pages/AddStudent.php">Add Student</a></button>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Percentage</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include '../PHP/Connection.php';
            $sql = "SELECT * FROM student_details";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td class="name"> <?php echo $row['name']; ?> </td>
                    <td class="percentage"> <?php echo $row['percentage']; ?> </td>
                    <td class="phonenumber"> <?php echo $row['phonenumber']; ?> </td>
                    <td class="email"> <?php echo $row['email']; ?> </td>
                    <td class="address"> <?php echo $row['address']; ?> </td>
                    <td class="edit_delete">
                        <a href="AddStudent.php?edit_id=<?php echo $row['id'] ?>">Edit</a>
                        <a href="../php/Delete.php?delete_id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>