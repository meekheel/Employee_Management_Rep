<?php
    session_start();
    global $msg;
    global $user_position;
    include 'connection.php';
    include 'function.php';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            
            //read from database
            $user_id = random_num(20);
            $query_ptEmp = "select * from parttimeemployee where Username = '$user_name' limit 1";
            $query_ftEmp = "select * from fulltimeemployee where Username = '$user_name' limit 1";
            $query_Manager = "select * from manager where Username = '$user_name' limit 1";
            $result_pt = mysqli_query($con,$query_ptEmp);
            $result_ft = mysqli_query($con,$query_ftEmp);
            $result_m = mysqli_query($con,$query_Manager);
            
            if ($result_pt) {
                if ($result_pt && mysqli_num_rows($result_pt)>0) {
                    $user_data  = mysqli_fetch_assoc($result_pt);
                    if ($user_data['Password']=== $password) {
                        
                        $_SESSION['PartTimeEmployeeId'] =$user_data["PartTimeEmployeeId"];
                        $user_position =$user_data["PartTimeEmployeeId"];
                        header("Location: index.php");
                        die();
                    }
                }
            }else if ($result_ft){
                if ($result_ft && mysqli_num_rows($result_ft)>0) {
                    $user_data  = mysqli_fetch_assoc($result_ft);
                    if ($user_data['Password']=== $password) {
                        
                        $_SESSION['FullTimeEmployeeId'] =$user_data["FullTimeEmployeeId"];
                        $user_position =$user_data["FullTimeEmployeeId"];
                        header("Location: index.php");
                        die();
                    }
                }
            }else if ($result_m){
                if ($result_m && mysqli_num_rows($result_m)>0) {
                    $user_data  = mysqli_fetch_assoc($result_m);
                    if ($user_data['Password']=== $password) {
                        
                        $_SESSION['ManagerId'] =$user_data["ManagerId"];
                        $user_position =$user_data["ManagerId"];
                        header("Location: index.php");
                        die();
                    }
                }
            }
            $msg = "The password is wrong, please enter the correct password";
        }else {
            $msg ="Please enter some valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Emp Login Page</title>
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
.warning_msg{
    color: red
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
        <h3>Employee Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username only" name="user_name">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <br>
        <a href="signup.php">Do you want to sign up?</a>
		<br>
		<br>
		<div class="warning_msg">
		<?php echo $msg;?>
		</div>
        <button type="submit" id="btn_login">Log In</button>
        
    </form>
</body>
</html>