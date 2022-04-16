<?php
// Process delete operation after confirmation
if(isset($_POST["FullTimeEmployeeId"]) && !empty($_POST["FullTimeEmployeeId"])){
    // Include config file
    require_once "dbConfig.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM FullTimeEmployee WHERE FullTimeEmployeeId = ?";
    
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location:  ../ManageEmployee.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($con);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["FullTimeEmployeeId"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        .navbar{
    	grid-column: 1 / span 2;
    	grid-row: 1;
    	display: grid;
    	grid-template-columns: 3fr 1fr 1fr 1fr;
    	align-items: center;
    	background-color: rgb(28, 60, 78);
    	box-shadow: 0px 0px 8px 2px #1C3C4E;
        }
        .navbar a{
        	text-decoration: none;
        	color: #d4af37;
        }
        #navbar-Website-Title{
        	grid-column: 1;
        	padding-left: 1rem;
        }
        #navbar-Item1{
        	grid-column: 1 2;
        	text-align: center;
        }
        #navbar-Item2{
        	grid-column: 2 3;
        	text-align: center;
        	border-left: 1px solid black;
        	border-right: 1px solid black;
        }
        #navbar-Item3{
        	grid-column: 3 4;
        	text-align: center;
        }
        .footer{
        	grid-column: 1 3;
        	grid-row: 5;
        	bottom: 0;
        	width: 100%;
        	position: fixed;
        	align-items: center;
        }
        .footer p{
        	margin: auto;
        	text-align: center;
        }
    </style>
</head>
<body>
	<div class="navbar">
    <h1 id="navbar-Website-Title"><a href="../MainPageManager.php">EmpPortal</a></h1>
    <div id="navbar-Item1"><a href="../inbox.php">Inbox</a></div>
    <div id="navbar-Item2"><a href="../ManageEmployee.php">Employees</a></div>
    <div id="navbar-Item3"><a href="../Schedule.php">Schedule</a></div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["FullTimeEmployeeId"]); ?>"/>
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="../ManageEmployee.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <div class="footer">
    <p>Made by Uzair, Edward, Meekheel, and Darryl @2022</p>
    </div>
</body>
</html>