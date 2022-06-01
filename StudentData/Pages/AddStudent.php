<?php
$update = false;
$name = "";
$percentage = "";
$phonenumber = "";
$email = "";
$address = "";
$id = 0;
if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $update = true;
    include '../PHP/Connection.php';
    $result = mysqli_query($connection, "SELECT * FROM student_details WHERE id='$id'");
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $percentage = $row['percentage'];
        $phonenumber = $row['phonenumber'];
        $email = $row['email'];
        $address = $row['address'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Student Information</title>
    <link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>

<body>
    <div class="heading">
        <h1>Add Student</h1>
    </div>
    <form method="POST" action="../PHP/Submit.php" class="input_form">
        <input type="hidden" value="<?php echo $id ?>" name="id">
        <div>
            <input type="text" name="name" class="user_input" value="<?php echo $name; ?>" pattern="[A-Z]{1}[a-z]{2,}" 
            title=" First letter of Name should be capital" placeholder="Enter Your Name" required />
        </div>

        <div>
            <input type="text" name="percentage" class="user_input" value="<?php echo $percentage; ?>" pattern="[0-9]{2}" placeholder="Enter Percentage" required />
        </div>

        <div>
            <input type="text" name="phonenumber" class="user_input" value="<?php echo $phonenumber; ?>" pattern="\+[0-9]{2}-[0-9]{10}" 
            title= "Phone Number should be this type +91-1234568971" placeholder="Enter Your Phone Number" required />
        </div>

        <div>
            <input type="text" name="email" class="user_input" value="<?php echo $email; ?>" pattern="[a-z0-9]+([_+-.][0-9a-z]+)*@[a-z]+.[a-z]{2,3}" 
            title= "Email input should be like abc@gmail.com" placeholder="Enter Your Email" required />
        </div>

        <div>
            <input type="text" name="address" class="user_input" value="<?php echo $address; ?>" pattern="[A-Za-z0-9]{1,15}[\.\-\s\,]{1,}[A-Za-z0-9]{1,15}"  placeholder="Enter Address" required />
        </div>

        <?php
        if ($update == true) :
        ?>
            <button formaction="../PHP/Update.php" value="update" type="submit" name="update" id="add_btn" class="add_btn">Update</button>
        <?php else : ?>
            <button value="submit" type="submit" name="submit" id="add_btn" class="add_btn">Submit</button>
        <?php endif; ?>
    </form>
</body>

</html>