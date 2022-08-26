<?php
require "header.php"
?>
<main class="container">
    <div class="d-flex justify-content-end mt-1">
        <?php
        if(isset($_SESSION['userId'])){
            echo('<div class="alert alert-success" id="loggedOutMsg" role="alert">
            You are logged in
        </div>');
        }
        else{
            echo('<div class="d-flex justify-content-end">
            <div class="alert alert-danger" id="loggedInMsg" role="alert">
                You are logged out!
            </div>');
        }
        ?>
        
    </div>
    

    </div>


</main>

<?php
require "footer.php"
?>