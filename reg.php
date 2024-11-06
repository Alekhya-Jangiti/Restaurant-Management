<?php
include ("connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($confirmPassword)) {
        $sql = "insert into newcustomer(firstName,lastName,email,password) values('$firstName','$lastName','$email','$password')";
        mysqli_query($con, $sql);
        echo"Inserted Successfully";
    }
    else
    {
        echo "Problem at inserting";
    }
}
?>