<?php

include '../PHP/Connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $percentage = $_POST['percentage'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $sqlQuery = "INSERT INTO student_details (name, percentage, phonenumber, email, address) VALUES ('$name', '$percentage', '$phonenumber', '$email', '$address')";
    $result = mysqli_query($connection, $sqlQuery);
    header('location: ../Pages/Index.php');
}

?>