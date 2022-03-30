<?php

function check_login($con){
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = $id limit 1";
        
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result)>0) {
            $user_data  = mysqli_fetch_assoc($result);
            return $user_data;
        }
   } 
   
   // redirect to login
   header("Location: login.php");
   die();
}

function random_num($length) {
    $text = "";
    if ($length<5) {
        $length = 5;
    }
    $len = rand(4,$length);
    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0,9);
    }
    return $text;
}


function getLoginForm() {
    global $msg;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" type="x-icon" href="../assets/receptionist.png">
    <title>Emp Login Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style media="screen"></style>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css" />    
</head>
<body>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Employee Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username only" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <br>
        <a href="../Layout/signup.php">Do you want to sign up?</a>
		<br>
		<br>
		<div class="warning_msg">
		<?php echo $msg;?>
		</div>
        <input id="button" type="submit" id="btn_login">
        
    </form>
</body>
</html>
<?php  
}

function getSignin(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="shortcut icon" type="x-icon" href="../assets/receptionist.png">
    <title>Emp Sign up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style media="screen"></style>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css" />
    </head>
    <body>
    <div class="shape"></div>
    <div class="shape"></div>
    </div>
    <form method="post" class="signup_form">
    <h3>Employee Sign up</h3>
    <h2>The admin will assign you to the correct position as soon that you create your account.</h2>
    <label for="firstname">First Name</label>
    <input type="text" placeholder="Enter your first name" name="firstname">
    
    <label for="lastname">Last Name</label>
    <input type="text" placeholder="Enter your last name" name="lastname">
    
    <label for="email">Email</label>
    <input type="text" placeholder="Email address" name="email">
    
    <label for="username">Username</label>
    <input type="text" placeholder="Username only" name="username">
    
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password">
    <br>
    <a href="login.php">Do you want to log in?</a>
    <br>
    <button type="submit" id="btn_signup">Sign up</button>
    
    </form>
    </body>
    </html>
    <?php 
}