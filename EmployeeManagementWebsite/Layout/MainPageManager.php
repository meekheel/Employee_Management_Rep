<?php
require_once '../Templates/MainFunctions.php';
require_once '../Templates/Functions.php';
getHeader();
?>
<div class="container-MainPageManager">
    <?php
    getNavBarMan();
    getManagerWelcome();
    getEmployeeEmail();
    getCreatorNames();
    
    getFooter();
    ?>


</div>
<?php

?>