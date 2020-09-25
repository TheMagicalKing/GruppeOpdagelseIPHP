<?php
	session_start();
	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	} else {
		header("Location: ../index.php?error=access_denied");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <?php echo "Hello $username" ?>
    <ul>
        <li><a href="Laila_search.php">Laila Search</a></li>
        <li><a href="mik.php">Mik</a></li>
        <li><a href="Nicki.php">Nicki Lommeregner</a></li>
    </ul>
</body>
</html>