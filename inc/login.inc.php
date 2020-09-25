<?php
if(isset($_POST["login-submit"])) {
    require "dbh.inc.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE username=?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)) {
            $pswCheck = password_verify($password, $row["psw"]);
            if(!$pswCheck) {
                header("Location: ../index.php?error=wrong_password");
            } else {
                session_start();
                $_SESSION["username"] = $row["username"];
                header("Location: ../main.php?login=success");
            }
        } else {
            header("Location: ../index.php?error=no_user");
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}