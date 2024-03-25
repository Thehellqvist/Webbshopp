<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content ="IE=edge">
        <meta name ="viewport" content ="width= device-width, intial-scale = 1.0">
        <title> Gymshop - product page </title>
        
        <link rel="stylesheet" href ="../produktsidacss/produkt.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
        crossorigin="anonymous"></script>
    </head>
    <body>
<div class ="container">
  <div class ="row"> 
    <div class ="col-md-5">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
           
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
           
            <div class="carousel-inner">
              <div class="item active">
                <img src="data:image/png;base64,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" alt="G icon">
              </div>
          
              <div class="item">
                <img src="https://www.gymgrossisten.com/dw/image/v2/BDJH_PRD/on/demandware.static/-/Sites-hsng-master-catalog/default/dw74c4ee61/Nya_produktbilder/Star_Nutrition/6677R_Starnutrition_SupremePWO_ForestBerries_250g_feb20.jpg?sw=655&sh=655&sm=fit&sfrm=png" alt="PWO Big">
              </div>
          
              <div class="item">
                <img src="https://pricespy-75b8.kxcdn.com/product/standard/280/4962490.jpg" alt="PWO small">
              </div>
            </div>
          
        
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only"></span>
            </a>
          </div>

    </div>
    <div class ="col-md-7">
    <p class="text-center"> GymShop</p> 
    <h2> Protein Powder Whey 100 - Star Nutrition </h2>
    <p> Product Code: 134pp2q69 </p>
    <h3> Rating: </h3>
    <img src="data:image/png;base64,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" class="stars">
    <p class="price">SEK 349 kr</p>
    <p><b>Availability:</b> In Stock </p>
    <p><b>Type:</b> Whey 100 protein powder</p>
    <p><b>Flavour:</b> Double Rich Chocolate </p>
    <p><b>Brand:</b> Star Nutrition Company</p>
    <p><b>Information:</b> Supreme PWO
Ta ditt pass till nästa nivå med Star Nutritions Supreme PWO – en effektiv prestationshöjare med beprövade ingredienser i väl tilltagna doser. <br>

* Ökar styrka, pump och uthållighet <br>
* Piggar upp och stärker fokus <br>
* Minskar mjölksyraproduktion <br>
* Välbeprövade ingredienser <br>
* Prestera bättre -> få bättre resultat <br>
Effektiva ingredienser i verksamma doser. Det är ett enkelt framgångsrecept för en bra prestationshöjare och det är precis vad Star Nutritions Supreme PWO erbjuder: Beprövade ingredienser i rätt mängd – inget mer, inget mindre. </p>
    <label>Quantity:</label>
    <input type = "text" value = "1">
    <button type="button" class="cart"> Add to cart </button>

    </div>
  </div>

</div>
    </body>
</html>