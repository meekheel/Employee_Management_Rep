<?php

function getEmployeeWelcome(){
?>
    <div class="Employee-Greeting">
        <h2>Hi "Employee", welcome to your</br>
        Personal Employee dashboard,</h2>
    </div>
<?php
}

function getManagerWelcome(){
    ?>
    <div class="Employee-Greeting">
        <h2>Hi "Manager", welcome to your</br>
        Personal Manager dashboard,</h2>
    </div>
<?php
}

function getEmployeeEmail(){
?>
    <div class="Email-Header">
        <h3>Here is your inbox,</h3>
        <button>New Email</button>
    </div>
    <div class="Message-Table">
        <table id="MainPageTable">
            <tr><th>From</th><th>Subject</th><th>Date</th></tr>
        </table>
    </div>

<?php
}

function getAdvantages(){
?>


<div class="table-wrapper">
<?php 

    $con=mysqli_connect("localhost","root","","login_db");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    echo'<table class="adv-table">
        <thead>
        <tr>
            <th>Employee ID</th>
            <th>Vacation Days</th>
            <th>Vacation Days Taken</th>
            <th>Sick Days</th>
            <th>Sick Days Taken</th>
        </tr>
        </thead>
        <tbody>';
        
        $result = mysqli_query($con,"SELECT * FROM advantages");
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['EmployeeId'] . "</td>";
            echo "<td>" . $row['VacationDays'] . "</td>";
            echo "<td>" . $row['VacationDaysTaken'] . "</td>";
            echo "<td>" . $row['SickDays'] . "</td>";
            echo "<td>" . $row['SickDaysTaken'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo"<tbody>
        </table>";
        mysqli_close($con);
        ?>

</div>


<?php 
}




?>