<?php
require "header.php"
?>
<main class="container">
    <div class="justify-content-center">
        <h1>Signup</h1>
        
        <form class="form-control" action="includes/signup.inc.php" method="POST">
            <div class="row">
                <div class="col m-2">
                    <input type="text" name="uid" class="form-control" placeholder="Username" aria-label="Username">
                </div>
                <div class="col m-2">
                    <input type="email" name="mail" class="form-control" placeholder="Email" aria-label="email">
                </div>
            </div>
            <div class="row">
                <div class="col m-2">

                    <input type="password" class="form-control" name="pwd" aria-label="password" placeholder="Password">
                </div>
                <div class="col m-2">

                    <input type="password" class="form-control" name="rpwd" aria-label="password" placeholder="Repeat Password">
                </div>
            </div>
            <div class="row">
                <div class="col m-2">
                    <button class="btn btn-primary" type="submit" name="signup-submit">Signup</button>
                </div>
            </div>
        </form>

    </div>

</main>

<?php
require "footer.php"
?>