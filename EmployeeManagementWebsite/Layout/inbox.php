<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<title>Performing Maintenance</title>
<style type="text/css">
    h1{
    font-size: 40px;
    }
    body{
    font: 20px Helvetica, sans-serif; 
    color: #333;
    }
    #article{
    display: block; 
    text-align: left; 
    width: 650px;
    margin: 0 auto;
    }
    a{ 
    color: #dc8100; 
    text-decoration: none; 
    }
    a:hover{ 
    color: #333; 
    text-decoration: none; 
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
    <h1 id="navbar-Website-Title"><a href="MainPageManager.php">EmpPortal</a></h1>
    <div id="navbar-Item1"><a href="inbox.php">Inbox</a></div>
    <div id="navbar-Item2"><a href="../Layout/ManageEmployee.php">Employees</a></div>
    <div id="navbar-Item3"><a href="../Layout/Schedule.php">Schedule</a></div>
    </div>
    <div id="article">
    <h1>This part of our site is still under construction.</h1>
        <div>
        <p>We apologize for the inconvenience, but we're performing some maintenance. You can still contact us at <a href="mailto:admin@empPortal.com">admin@empPortal.com</a>. We'll be back up soon!</p>
        <p>-EmpPortal Team</p>
        </div>
    </div>
    <div class="footer">
    <p>Made by Uzair, Edward, Meekheel, and Darryl @2022</p>
    </div>
</html>
