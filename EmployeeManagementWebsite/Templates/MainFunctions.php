<?php
//Main functions that are going to be in almost all pages
//Put in a different file so that they are easier to find
function getNavBar(){
?>
    <div class="navbar">
    <h1 id="navbar-Website-Title"><a href="../Layout/MainPageEmployee.php">EmpPortal</a></h1>
    <div id="navbar-Item1"><a href="#">Inbox</a></div>
    <div id="navbar-Item2"><a href="#">Absences & Requests</a></div>
    <div id="navbar-Item3"><a href="#">Pay Info</a></div>
</div>
<?php
}

function getNavBarMan(){
    ?>
    <div class="navbar">
    <h1 id="navbar-Website-Title"><a href="../Layout/MainPageManager.php">EmpPortal</a></h1>
    <div id="navbar-Item1"><a href="../Layout/Inbox.php">Inbox</a></div>
    <div id="navbar-Item2"><a href="../Layout/ManageEmployee.php">Employees</a></div>
    <div id="navbar-Item3"><a href="../Layout/Schedule.php">Schedule</a></div>
</div>
<?php
}

function getHeader(){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>EmpPortal</title>
        <meta  name="viewport" content="width=device=width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css" />
    </head>
    <body>
<?php
}
function getCreatorNames(){
?>
    <div class="footer">
    <p>Made by Uzair, Edward, Meekheel, and Darryl @2022</p>
    </div>
<?php
}

function getFooter(){
?>
    </body>
    </html>
<?php
}

?>