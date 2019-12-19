<?php
if (isset($_POST['submit'])){
    
    require 'dbh.inc.php';

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (dbName, dbLastname, dbEmail, dbPassword) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../subscribe.php?error=sqlerror");
        } else {
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt , "ssss", $name, $lastname, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../dasboard.php?category=business");
            exit();
        }
    

    
    } else {
        header("Location: ../subscribe.php");
 }


?>



