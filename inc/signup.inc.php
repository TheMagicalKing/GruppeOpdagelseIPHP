<?php
if(isset($_POST["signup-submit"])) {
    require "dbh.inc.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username, psw) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $passwordHash);
    mysqli_stmt_execute($stmt);

    header("Location: ../login.php?signup=success");
} else {
    header("Location: ../index.php?msg=access_denied");
}