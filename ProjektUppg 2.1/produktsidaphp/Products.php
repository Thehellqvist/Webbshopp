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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <div class="header">
    <div class="topnav">
      <a href="home.php"><i class="fa fa-fw fa-home"></i> Gymshopen</a>
      <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
      <a class="active" href="Products.php"><i class="fas fa-dumbbell"></i> Products</a>
      <div class="topnav-right">
        <a href="./login.php"><i class="fa fa-fw fa-user"></i> Konto</a>
        <a href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
      </div>
    </div>
  </div>
  <div class="small-container">
    <div class="row row-2">
      <h2>Alla produkter</h2>
      <form action=""></form>
      <div class="sortera">
        <select>
          <option value="populäritet" type="button" onclick="doFunction();">populäritet</option>
          <option value="Högsta pris" type="button" onclick="doFunction();">Högsta pris</option>
          <option value="Lägsta pris" type="button" onclick="doFunction();">Lägsta pris</option>
        </select>
      </div>
    </div>
  </div>
  <div class="products"> 
        <?php
        session_start();
          include './ProjektUppg%202/produktsidacss/style.css';
           $db = new SQLite3("../produktsidaphp/databas/gymdatabas.db");
            $id = $_POST['id'];
            $sql = "SELECT * FROM products";
              $statement = $db->prepare($sql);
              $result = $statement->execute();

              while ($row = $result->fetchArray()) {

                  $unitName = $row['unitName'];
                  $itemDesc = $row['itemDesc'];
                  $price = $row['price'];
                  $picture = $row['PICTURE'];

              ?>
        <div class="prod-col">
          <a href="./produkt_detail.php?id=<?php echo $row["productID"]?>">
          <img src="<?php echo $row["PICTURE"]?>" alt="" style="">  
        </a>
        <div class="prodtext">
        <h4><?php echo $row["unitName"]?></h4>
        <p class="price"><?php echo $row["price"]?></p>
        <div class="earth">
          <form name="Post" id="<?php echo $row["productID"]?>" action="./produkt_detail.php?id=<?php echo $row["productID"]?>" method="POST">
              <input type="hidden" name="id" value="<?php echo $row["productID"]?>"/>
            <input type="submit" value="Köp" name="var2">
          </form>
          </div>
        </div>
        </div>
        <?php
         }
        ?>
    </div>

  <!---produkter--->

  
  <div class="bottom">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="../Bilder/image1.jpeg" alt="">
        </div>
        <div class="col-2">
          <h1>Boka PT!</h1>
          <p>Våra personliga tränare... Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolore blanditiis a culpa libero quibusdam excepturi consectetur inventore assumenda, 
            similique nam quisquam eos dolorem voluptas animi velit quo mollitia voluptatum.</p>
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
