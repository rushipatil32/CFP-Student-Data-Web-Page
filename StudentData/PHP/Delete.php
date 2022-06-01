<?php
include '../PHP/Connection.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sqlQuery = "DELETE FROM student_details WHERE id=$id";
    $result = mysqli_query($connection, $sqlQuery);
    if ($result) {
        header('location: ../Pages/Index.php');
    }
}
?>