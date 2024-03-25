<!DOCTYPE html>
<html>

<head>
    <title>Gymshopen</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../produktsidacss/Login.css">
    <script src="./Main.js"> </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar">
<div class="nav">
  <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar">
  <a class="active" href="./index.php"><i class="fa fa-fw fa-home"></i> Back to Homescreen</a>
</div>
</nav>
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Kundinloggning</h3>
            <p></p>
          </div>
        </div>
        <form class="login-form" action="login_process.php" method="POST">
        <label for="username"></label>
            <input type="text" name="username" id="username" required minlength="4" placeholder="Enter a username"
                required>
          <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Enter a password" required
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
          <button>login</button>
          <p class="message">Inte registrerad? <a href="signup.php">skapa ett konto</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>