<!DOCTYPE html>
<html>

<head>
    <title>Gymshopen</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Homepage gymshopen</title>
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
    <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Gymshopen</a>
    <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Kontact</a>
    <a href="Products.php"><i class="fas fa-dumbbell"></i> Products</a>
  <div class="topnav-right">
    <a href="login.php"><i class="fa fa-fw fa-user"></i> Konto</a>
    <a href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
  </div>
</div>
  <div class ="row">  
    <div class= "col-2">
      <h1>Vårt nya proteinpulver från sprouts!<br></h1>
      <p> Sprouts nya proteinpulver är ett premium protein pulver för dig som vill ha<br> 
      det absolut bästa veganska proteinet på marknaden!<br>
      </p>
        <form name="Post" id="5>" action="./produkt_detail.php?id=<?php echo $row["productID"]?>" method="POST">
              <input type="hidden" name="id" value="5"/>
            <input type="submit" value="Köp" name="var2">
          </form>
    </div>
    <div class ="col-2">
      <img src="../Bilder/image5.avif">
    </div>
</div>
</div>

<!---produkter---> 
  <div class ="small-container">
      <h2 class ="title">Utvalda produkter</h2>
      <div class="row">
        <div class="col-3">
          <img src="../Bilder/image2.avif" alt="">
          <h4>Earth Pull Protein</h4>
          <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          </div>
          <p>£19.99</p>
          <form name="Post" id="2>" action="./produkt_detail.php?id=<?php echo $row["productID"]?>" method="POST">
              <input type="hidden" name="id" value="2"/>
            <input type="submit" value="Köp" name="var2">
          </form>
        </div>
        <div class="col-3">
          <img src="../Bilder/image3.avif" alt="">
          <h4>Char Pull Protein</h4>
          <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          </div>
          <p>£19.99</p>
          <form name="Post" id="3>" action="./produkt_detail.php?id=<?php echo $row["productID"]?>" method="POST">
              <input type="hidden" name="id" value="3"/>
            <input type="submit" value="Köp" name="var2">
          </form>
        </div>
        <div class="col-3">
          <img src="../Bilder/image4.avif" alt="">
          <h4>True Stone Preworkout</h4>
          <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          </div>
          <p>£24.99</p>
          <form name="Post" id="1>" action="./produkt_detail.php?id=<?php echo $row["productID"]?>" method="POST">
              <input type="hidden" name="id" value="1"/>
            <input type="submit" value="Köp" name="var2">
          </form>
      </div>
    </div>
  </div>
  <div class="bottom">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
              <img src="../Bilder/image1.jpeg" alt="">
            </div>
            <div class="col-2">
              <h1>Boka PT!</h1>
              <p>Våra personliga tränare... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis veniam ea unde facere inventore, maiores illum veritatis temporibus, aliquid eligendi iure vero sed provident magni perferendis modi enim et doloremque.</p>
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
