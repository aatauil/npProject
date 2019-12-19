<?php

if (isset($_POST['login-submit'])){

    require "dbh.inc.php";

    $loginMail = $_POST['login-email'];
    $loginPass = $_POST['login-password'];

    $sql = "SELECT * FROM user WHERE dbEmail = ?";
    $name = "SELECT dbName FROM user WHERE dbEmail = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: login.php.error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $loginMail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($loginPass, $row['dbPassword']);
            if ($pwdCheck == false) {
                header('Location: ../login.php?error=wrongpwd');
                exit();
            } else if($pwdCheck == true) {

                header("Location: ../dasboard.php");
            } else {
                header('Location: ../login.php?error=wrongpwd');
                exit();
            }

        } else {
            header('Location: ../login.php?error=nouser');
            exit();
        }

    }

} else {
    header("Location: login.php");
}

?>