<?php
    session_start();
    
    include 'connection.php';
    include 'function.php';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die();
        }else {
            $msg = validInfo();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Emp Sign up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>
</head>
<body>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Employee Sign up</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username only" name="user_name">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
		<br>
        <a href="login.php">Do you want to log in?</a>
		<br>
        <button type="submit" id="btn_signup">Sign up</button>
        
    </form>
</body>
</html>