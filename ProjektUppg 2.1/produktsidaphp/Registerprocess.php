<?php
    $db = new SQLite3("./databas/gymdatabas.db");
    $Password = $_POST['password'];
    $Username = $_POST['username'];
    $Email = $_POST['email'];

    $sql = "INSERT INTO Customers (Username, Email ,Password) VALUES (:Username, :Email, :Password)";
    $hash = password_hash($Password, PASSWORD_BCRYPT);
    
    $stmt = $db ->prepare($sql);
    $stmt->bindParam(':Username', $Username, SQLITE3_TEXT);
    $stmt->bindParam(':Password', $hash, SQLITE3_TEXT);
    $stmt->bindParam(':Email', $Email, SQLITE3_TEXT);

    if($stmt->execute())
    {
      $db -> close (); 
      
    
    }
    else 
    {
      $db -> close (); 
     
    }
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/submitpost.css" />
</head>


<!---Snygga till det här---> 
<body>
  <h2>Du är nu registrerad!</h2>

  <div class="Sendback" id="Sendback">
    <form name="HP" action="home.php">
      <input type="submit" value="Logga in">
    </form>
  </div>

</body>

</html>
