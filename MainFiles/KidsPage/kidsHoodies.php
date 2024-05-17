<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../HeaderFooter/header.php'?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../KidsPage/kidsShoes.css" rel="stylesheet">
    <link href="../KidsPage/checkout.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <style>
        .popup img{
            width: 400px;
        }
        svg{
            display: block;
           margin: auto;
           margin-top: -25px;
        }
        #sortButtons {
    text-align: center; /* Qendra butonat në div */
}

.submit-button {
    background-color: gray; /* Ngjyra e sfondit */
    color: #fff; /* Ngjyra e tekstit */
    border: 1px solid #007bff; /* Kufiri */
    padding: 6px 12px; /* Gjerësia dhe lartësia e padding */
    border-radius: 4px; /* Forma e këndit */
    cursor: pointer; /* Kursori kur kalon mbi butonin */
    transition: background-color 0.3s, color 0.3s; /* Tranzicioni i ngjyrës dhe ngjyrës së tekstit kur kalon mbi butonin */
    margin: 5px; /* Hapësira e brendshme midis butonave */
}

/* Stili për hover-in */
.submit-button:hover {
    background-color: #0056b3; /* Ngjyra e sfondit në hover */
    color: #fff; /* Ngjyra e tekstit në hover */
}

    </style>
    <title>Hoodies</title>
</head>
<body>

    <div id="header"></div>
    <div class="container-fluid">
    <div class="row">
        <button id="sortButton" onclick="toggleSorting()">Sort Products</button>
    </div>

    <div id="sortButtons">
    <form id="sortForm" method="get">
</br>
        <!-- Butoni për asortim -->
        <button type="submit" name="method" value="asort" class="submit-button">Sort by price (asc)</button>
        <!-- Butoni për arsortim -->
        <button type="submit" name="method" value="arsort" class="submit-button">Sort by price (desc)</button>
    </form>
    </div>




    <div class="row">
    <?php
$products = array(
    array('content' => "<div class='col-md-4'>
                        <a class='linkToBuy' onclick='openPopup()'>
                            <img alt='NikeShoes' class='firstImage' src='../../KidsImages/kidsHodies/imageedit_7_7424565596.png'>
                            <p class='firstParagraph'>Zipped Technical Long-Sleeved Top</p>
                            <p class='qmimi'>400$</p>
                            <p class='goToProduct'>Go To Product</p>
                        </a>
                        </div>",
                        'price' => 400),
    array('content' => "<div class='col-md-4'>
                        <a class='linkToBuy' onclick='openPopup()'>
                            <img alt='NikeShoes' class='firstImage' src='../../KidsImages/kidsHodies/imageedit_8_9419444869.png'>
                            <p class='firstParagraph'>Embroidered Cotton Sweatshirt</p>
                            <p class='qmimi'>520$</p>
                            <p class='goToProduct'>Go To Product</p>
                        </a>
                        </div>",
                        'price' => 520),
    array('content' => "<div class='col-md-4'>
                        <a class='linkToBuy' onclick='openPopup()'>
                            <img alt='NikeShoes' class='firstImage' src='../../KidsImages/kidsHodies/imageedit_13_3713525364.png'>
                            <p class='firstParagraph'>Wool Blend Crewneck</p>
                            <p class='qmimi'>720$</p>
                            <p class='goToProduct'>Go To Product</p>
                        </a>
                        </div>",
                        'price' => 720),
    array('content' =>"<div class='col-md-4'>
                        <a class='linkToBuy' onclick='openPopup()'>
                            <img  alt='NikeShoes' class='firstImage' src='../../KidsImages/kidsHodies/imageedit_10_8812054538.png '>
                            <p class='firstParagraph'>Chunky Wool Cardigan</p>
                            <p class='qmimi'>1002$</p>
                            <p class='goToProduct'>Go To Product</p>
                        </a>
                        </div>",
                        'price' => 1002),
    array('content' =>"<div class='col-md-4'>
                        <a class='linkToBuy' onclick='openPopup()'>
                            <img alt='NikeShoes' class='firstImage' src='../../KidsImages/kidsHodies/imageedit_11_8722865429.png'>
                            <p class='firstParagraph'>Monogram Zipped Velvet Hoodie</p>
                            <p class='qmimi'>900$</p>
                            <p class='goToProduct'>Go To Product</p>
                        </a>
                        </div>",
                        'price' => 900),
    array('content' =>"<div class='col-md-4'>
                        <a class='linkToBuy' onclick='openPopup()'>
                            <img alt='NikeShoes' class='firstImage' src='../../KidsImages/kidsHodies/imageedit_12_2184711225.png'>
                            <p class='firstParagraph'>CHESS PRINT HOODIE</p>
                            <p class='qmimi'>900$</p>
                            <p class='goToProduct'>Go To Product</p>
                        </a>
                        </div>",
                        'price' => 900)
);

$sortingMethod = isset($_GET['method']) ? $_GET['method'] : '';

if ($sortingMethod === 'asort' || $sortingMethod === 'arsort') {
    $sortingFunction = $sortingMethod;
} else {
    $sortingFunction = 'arsort';
}
$prices = array();
foreach ($products as $product) {
    $prices[] = $product['price'];
}

$sortingFunction($prices);

$sorted_products = array();
foreach ($prices as $key => $price) {
    $sorted_products[] = $products[$key]['content'];
}
?>

<div id="header"></div>
<div class="container-fluid">

    <div class="row">
        <?php
        foreach ($sorted_products as $product) {
            echo $product;
        }
        ?>
    </div>
</div>


    <div id="footer"></div>
        
    
        <div class="container">

            <div class="popup" id="popup">

                    <img  class="productImage" src="../../KidsImages/kidsHodies/imageedit_7_7424565596.png">
                    <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                    <form id="formDetails" class="formDetails" >
                    <div class="allInfo">
                    <p class="productName">AAA</p>
                    <p class="ref">XYZ</p>
                    <p class="prductPrice">100</p>
                    <p class="allSizes"></p>
                    <select class="size" name="size">
                        <option name="s">S</option>
                        <option name="m">M</option>
                        <option name="l">L</option>
                    </select>
                    <input class="submitButton" type="submit" value="Click & Collect">
                    <button type="button" class="productDetails btn-demo" data-toggle="modal" data-target="#myModal2"> Product Details</button>
                </form>
                </div>
            </div>  
          
          </div>
          <!-- <button onclick="viewCart()">View Cart</button> -->


          <div class="container demo">
            <div class="text-center">
            </div>
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <div class="modal-body">
                    <ul class="productInfo" style="list-style-type: none;">
                      <li><h3  class="productDetailsHeading productElemnt">Product Details</h3></li>
                      <li class="productElemnt">Dimensions : 12.2 in (L) x 11.8 in (H) x 7.5 in (W) </li>
                      <li class="productElemnt">Material : Polyamide canvas with inside coating </li>
                      <li class="productElemnt">Trimming : Russian leather (cowhide) </li>
                      <li class="productElemnt">Weight : 0.63 lb                </li>
                      <li class="productElemnt">EXTERIOR DETAILS</li>
                      <li class="productElemnt">Closing : Zipped and snap closure</li>
                      <li class="productElemnt">INTERIOR DETAIL</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <script src="../KidsPage/script.js"></script> 
          <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
        
          <script>
            const productDetailsArray = [
  " Zipped Technical Long-Sleeved Top\n   - Color Options: Carbon Black, Steel Grey\n   - Material: Technical fabric blend\n   - Features: Zipped closure, long sleeves\n   - Best For: Athletic activities and casual wear\n   - Special Feature: Technical fabric for enhanced breathability and comfort.",

  " Embroidered Cotton Sweatshirt\n   - Color Options: Heather Grey, Navy Blue\n   - Material: Soft cotton blend\n   - Features: Embroidered design, crewneck, ribbed cuffs and hem\n   - Best For: Cozy casual occasions\n   - Special Feature: Intricate embroidery for a stylish and unique look.",
  
  " Chunky Wool Cardigan\n   - Color Options: Rich Burgundy, Forest Green\n   - Material: Chunky wool blend\n   - Features: Button-front closure, deep pockets\n   - Best For: Cold weather layering\n   - Special Feature: Chunky knit for a warm and cozy feel.",
  
  " Monogram Zipped Velvet Hoodie\n   - Color Options: Royal Blue, Burgundy\n   - Material: Plush velvet fabric\n   - Features: Monogram pattern, zipped closure, hood\n   - Best For: Casual outings and streetwear\n   - Special Feature: Luxurious velvet with a stylish monogram design.",
  
  " CHESS PRINT HOODIE\n   - Color Options: Chessboard Black/White, Checkered Red/Black\n   - Material: Cotton blend\n   - Features: Chessboard print, drawstring hood\n   - Best For: Casual and chess enthusiasts\n   - Special Feature: Unique chessboard pattern for a distinctive style.",
  
  " Wool Blend Crewneck\n   - Color Options: Charcoal Grey, Autumn Brown\n   - Material: Wool blend\n   - Features: Crewneck, ribbed cuffs and hem\n   - Best For: Everyday comfort and warmth\n   - Special Feature: Classic crewneck design with a cozy wool blend.",
];

initializeProductDetails(productDetailsArray);
$('#footer').load('../HeaderFooter/footer.html');
// $('#header').load('/MainFiles/HeaderFooter/header.html');


          </script>
       <script src="../HeaderFooter/footerStyle.js"></script>
        
</body>
</html>