<?php
    session_start();

  
    include '../Templates/connection.php';
    include '../Templates/Login_Function.php';   
    
    
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if (!empty($username) && !empty($password)) {
            
            //read from database
            //$user_id = random_num(20);
             $query_ptEmp = "select * from parttimeemployee where Username = '$username' limit 1";
            $query_ftEmp = "select * from fulltimeemployee where Username = '$username' limit 1";
             $query_Manager = "select * from manager where Username = '$username' limit 1";
             $result_pt = mysqli_query($con,$query_ptEmp);
            $result_ft = mysqli_query($con,$query_ftEmp);
             $result_m = mysqli_query($con,$query_Manager);
            
            if ($result_pt) {
                if ($result_pt && mysqli_num_rows($result_pt)>0) {
                    $user_data  = mysqli_fetch_assoc($result_pt);
                    if ($user_data['Password']=== $password) {
                        
                        $_SESSION['userid'] =$user_data["PartTimeEmployeeId"];
                        $user_position =$user_data["PartTimeEmployeeId"];
                        header("Location: MainPageEmployee.php");
                        die();
                    }
                }
            }
            if ($result_ft){
                if ($result_ft && mysqli_num_rows($result_ft)>0) {
                  $user_data  = mysqli_fetch_assoc($result_ft);
                    if ($user_data['Password']=== $password) {
                        
                        $_SESSION['userid'] =$user_data["FullTimeEmployeeId"];
                        //$user_position =$user_data["FullTimeEmployeeId"];
                        header("Location: MainPageEmployee.php");
                        die();
                    }
                }
            }
            if ($result_m){
                if ($result_m && mysqli_num_rows($result_m)>0) {
                    $user_data  = mysqli_fetch_assoc($result_m);
                    if ($user_data['Password']=== $password) {
                        
                        $_SESSION['userid'] =$user_data["ManagerId"];
                        //$user_position =$user_data["ManagerId"];
                        header("Location: MainPageManager.php");
                        die();
                    }
                }
            }
            $msg = "The username or the password is wrong, please enter valid information";
        }else {
            $msg ="Please enter some valid information";
        }
    }
    
    getLoginForm()
?>

