<!DOCTYPE html>
<html>

<head>
  <title>Gymshopen</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>alla produkter gympshopen</title>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="../produktsidacss/style.css">
  <script src="./Main.js"> </script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>

<body>
  <div class="header">
    <div class="topnav">
      <a href="home.php"><i class="fa fa-fw fa-home"></i> Gymshopen</a>
      <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Kontact</a>
      <a class="active" href="Products.php"><i class="fas fa-dumbbell"></i> Products</a>
      <div class="topnav-right">
        <a href="./login.php"><i class="fa fa-fw fa-user"></i> Konto</a>
        <a href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
      </div>
    </div>
  </div>

  <?php
  include './ProjektUppg%202/produktsidacss/style.css';
  $db = new SQLite3("../produktsidaphp/databas/gymdatabas.db");
  $id = $_POST['id'];
  $sql = "SELECT *
FROM products p
WHERE p.productID == '$id'";
  $statement = $db->prepare($sql);
  $result = $statement->execute();

  while ($row = $result->fetchArray()) {

    $unitName = $row['unitName'];
    $itemDesc = $row['itemDesc'];
    $price = $row['price'];
    $picture = $row['PICTURE'];


    echo " <div class = 'produkt'>
  <div class =col-md-7>
    <img src=" . $picture . ">
    </div>
    <div class =col-md-7>
    <p><b>" .$unitName. "</b></p>
    <p>" . $itemDesc . "</p>
    <p class=price><b>Pris:</b>" . $price . "</p>
    <label>Quantity:</label>
    <input type = text value = 1>
    <button type=button class=cart> Add to cart </button>

    </div>
    
  </div>

  </div>";
  }


  ?>

<div class="center" id="container">
        <form name="Post" action="submitpost.php" method="POST" onsubmit="">
          <textarea
            type="text"
            name="inlaggid"
            id="inlaggid"
          >
        </textarea>
          <input type="submit" value="Lägg upp" />
<?php
 $db = new SQLite3("../produktsidaphp/databas/gymdatabas.db");
 $id = $_POST['id'];
$sql = "SELECT *
FROM Comments c,products p,Customers k
WHERE p.productID == '$id' AND c.productID= '$id'AND k.customerID ==c.customerID ORDER BY customerID DESC";
$statement = $db -> prepare($sql);
$result = $statement -> execute();

while($row=$result-> fetchArray())
{

  $Text = $row['Text'];
  $customerID= $row['customerID'];
  $email =$row['Email'];
  $username =$row['Username'];
  

  echo " <div class = 'commentbox'>
  <h1>".$username."</h1>
  <p>".$Text."</p>
  </div>";
} 


?>

  <!---produkter--->
  <div class="bottom">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="../Bilder/image1.jpeg" alt="">
        </div>
        <div class="col-2">
          <h1>Boka PT!</h1>
          <p>Våra personliga tränare... Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolore blanditiis a culpa libero quibusdam excepturi consectetur inventore assumenda, similique nam quisquam eos dolorem voluptas animi velit quo mollitia voluptatum.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Useful links</h3>
          <ul>
            <li>Frakt</li>
            <li>Vanliga frågor</li>
            <li>Telefon</li>
            <li>Leveransvillkor</li>
          </ul>
        </div>
      </div>
    </div>
</body>

</html>
