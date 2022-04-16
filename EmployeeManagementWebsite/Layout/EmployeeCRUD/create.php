<?php
// Include config file
require_once "dbConfig.php";
 
// Define variables and initialize with empty values
$fullName = $userName = $managerId = $salary = "";
$fullname_err = $address_err = $managerId_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_fullname = trim($_POST["FullName"]);
    if(empty($input_fullname)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $fullName = $input_name;
    }
    
    $input_username = trim($_POST["Username"]);
    if(empty($input_username)){
        $username_err = "Please enter a Username.";
    } else{
        $userName = $input_username;
    }
    
    $input_managerid = trim($_POST["ManagerId"]);
    if(empty($input_managerid)){
        $managerId_err = "Please select a Manager ID.";
    } else{
        $managerId = $input_managerid;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($fullname_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO FullTimeEmployee (FullName, Username, ManagerId, Salary) VALUES (?, ?, ?, ?)";
        $sql2 = $mysqli->query("SELECT ManagerId from manager");
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_username, $param_managerid, $param_salary);
            
            // Set parameters
            $param_name = $fullName;
            $param_username = $userName;
            $param_managerid = $managerId;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: ../ManageEmployee.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add full time employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fullName; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $userName; ?>">
                            <span class="invalid-feedback"><?php echo $username_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group">
                        <label>Manager ID</label>
                        <select name="ManagerId">
                            <?php 
                            while($rows = $sql2->fetch_assoc()){
                                $managerId = $rows['ManagerId'];
                                echo"<option value='$managerId'>$managerId</option>";
                            }
                            ?>
                    	</select>
                    	<input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../ManageEmployee.php" class="btn btn-secondary ml-2">Cancel</a>
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