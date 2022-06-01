<?php

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $percentage = $_POST['percentage'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    include '../PHP/Connection.php';

    $sqlQuery = "UPDATE student_details SET name='$name', percentage='$percentage', phonenumber='$phonenumber', email='$email', address='$address' WHERE id=$id";
    $result = mysqli_query($connection, $sqlQuery);
    if ($result) {
        header('location: ../Pages/Index.php');
    }
}

?>