<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="Lailas_assignment.php" method="post">
    <input type="text" name="search">
    <input type="submit">
</form>
<?php

if(isset( $_SESSION['result'] ) ) {

    echo "<h2>" . $_SESSION['result'][0] . "</h2>";

    if(isset($_SESSION['result'][1])) {
        echo "<p>" . $_SESSION['result'][1] . "</p>";
    }

}

?>
</body>
</html>
