<?php
//Main functions that are going to be in almost all pages
//Put in a different file so that they are easier to find
function getNavBar(){
?>
    <div class="navbar">
    <h1 id="navbar-Website-Title"><a href="../Layout/MainPageEmployee.php">EmPortal</a></h1>
    <div id="navbar-Inbox"><a href="#">Inbox</a></div>
    <div id="navbar-Absences"><a href="#">Absences & Requests</a></div>
    <div id="navbar-Pay"><a href="#">Pay Info</a></div>
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

function getFooter(){
?>
    </body>
    </html>
<?php
}





?>