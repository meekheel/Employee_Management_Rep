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




?>