<?php
    session_start();
  
    include 'connection.php';
    include 'function.php';
    
    $user_data = check_login($con);
    
?>
<!DOCTYPE html>
    <head>
    	<title>Employee Management</title>
    </head>
    <body>
    
    	<a href="logout.php">Logout</a>
    	<h1>this is the index page</h1>
    	<br>
    	
    	Hello, <?php echo $user_data['user_name'];?>.
    	
    </body>
</html>