<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
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
                    <h2 class="mt-5 mb-3">Invalid Request</h2>
                    <div class="alert alert-danger">Sorry, you've made an invalid request. Please <a href="../ManageEmployee.php" class="alert-link">go back</a> and try again.</div>
                </div>
            </div>        
        </div>
    </div>
    <div class="footer">
    <p>Made by Uzair, Edward, Meekheel, and Darryl @2022</p>
    </div>
</body>
</html>