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
    <?php
    $db = new SQLite3("./databas/mydb.db");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
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
          <h2>Sign Up</h2>
          <p>Please fill this form to create an account.</p>
          </div>
        </div>
        <form action="Registerprocess.php" method="post">
        <label for="username"></label>
            <input type="text" name="username" id="username" required minlength="4" placeholder="Enter a username"
                required>
                <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="john@smith.com" required>
            <label for="password"></label>
          <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Enter a password" required
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
          <button>login</button>
          <p class="message">Redan registrerad? <a href="index.php">logga in</a></p>
        </form>
      </div>
    </div>
</body>
</html>