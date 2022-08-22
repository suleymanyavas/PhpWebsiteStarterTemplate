<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['rpwd'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) { //error handler for username, email, password and repeat password

        header("Location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);

        exit(); //after user makes a mistake this method stops the script from running
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid&uid=");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=" . $username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=" . $email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?"; //prepared statement for secuirity of our Database
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username); //second parameter if u give s its string if u give I its integer if you give b its boolean, if u have more items u have to add more s
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt); //controle of er al een record is of niet met de zelfde naam
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers,pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {

                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //  DEFAULT hashing always update with new versions of php so no security problems after updates
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt); // closing resources 
    mysqli_close($conn);

}
else{
    header("Location: ../signup.php");
    exit();
}
