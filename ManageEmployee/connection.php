<?php 
require_once 'dbConfig.php';
if(!mysqli_connect_error()){
    //redirection to manipulate data
    header('location:manipulateData.php');
    
}else{
    header('location:errorDatabase.php');
}

?>
