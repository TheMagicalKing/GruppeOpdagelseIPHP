<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World: Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="container.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <nav class="teal">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo left" style="margin-left: 20px"><?php echo "Hello World" ?></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="qweContainer">
    <div class="row">
    <form class="col s12" action="inc/signup.inc.php" method="post">
    <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light s12" type="submit" name="signup-submit">create account
            <i class="material-icons right">send</i>
        </button>
    </form>
  </div>
</div>
</body>
</html>