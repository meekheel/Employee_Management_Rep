<?php
session_start();

include '../Templates/connection.php';
include '../Templates/Login_Function.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($username) && !empty($password) && !is_numeric($username)) {
        
        $query = "insert into parttimeemployee (FirstName, LastName, Email, Username,Password) values ('$firstname', '$lastname', '$email','$username','$password')";
        mysqli_query($con,$query);
        header("Location: login.php");
        die();
    }else {
        $msg = validInfo();
    }
}

getSignin();
?>

