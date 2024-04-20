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

    <title>Jackets n' Coats</title>
    <style>
        .popup img{
            width: 400px;
        }
        svg{
            display: block;
           margin: auto;
           margin-top: -25px;
        }
        
    </style>
</head>
<body>

    <div id="header"></div>
    <div class="container-fluid">
        <div  class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                <img alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_15_2539966627.png">
                <p class=" firstParagraph">Extra-Long  Feathers Puffer kidsJacketsCoats</p>
                <p class="qmimi">450$</p>
                <p class="goToProduct">Go To Product</p>
            </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_16_3004887885.png">
                    <p class="firstParagraph">RUBBERISED HOODED JACKET                    </p>
                    <p class="qmimi">220$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>            </div>
            <div class="col-md-4">     <a class="linkToBuy" onclick="openPopup()">
                <img  alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_17_6527306898.png"">
                <p class="firstParagraph">DOUBLE-FACED FAUX LEATHER 
                </p>
                <p class="qmimi">102$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_18_7450732683.png">
                    <p class="firstParagraph">REVERSIBLE BOMBER JACKE</p>
                    <p class="qmimi">120$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_19_8798858469.png">
                    <p class="firstParagraph">LONG HOUNDSTOOTH COAT                    </p>
                    <p class="qmimi">340$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4">     <a class="linkToBuy" onclick="openPopup()">
                <img alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_20_8107405460.png">
                <p class="firstParagraph">TRUE NEUTRALS FEATHERS JACKET </p>
                <p class="qmimi">720$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">     <a class="linkToBuy" onclick="openPopup()">
                <img alt="NikeShoes" class="firstImage" src="../../KidsImages/kidsJacketsCoats/imageedit_21_8444105104.png">
                <p class="firstParagraph">THERMO-SEALED PUFFER COAT</p>
                <p class="qmimi">1500$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
            
        </div>
    </div>

    <div id="footer"></div>

        

        <div class="container">

            <div class="popup" id="popup">

                    <img class="productImage"  src="../../KidsImages/kidsJacketsCoats/imageedit_20_8107405460.png">
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
                            </div>
                    </form>
                </div>
        </div>  
          


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

          <!-- <button onclick="viewCart()">View Cart</button> -->

          <script src="../KidsPage/script.js"></script> 
          <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

          <script>
            const productDetailsArray = [
       
         " Extra-Long Feathers Puffer\n   - Color Options: Midnight Black, Arctic Blue\n   - Material: Water-resistant polyester shell, down feather filling\n   - Features: Extra-long length, insulated puffer design\n   - Best For: Cold weather and outdoor activities\n   - Special Feature: Provides exceptional warmth and comfort for extended wear.",
       
         " Rubberized Hooded Jacket\n   - Color Options: Urban Grey, Rainforest Green\n   - Material: Rubberized cotton blend\n   - Features: Attached hood, zip-front closure\n   - Best For: Rainy and windy days\n   - Special Feature: Water-resistant and stylish design for urban adventures.",
         
         " Double-Faced Faux Leather Reversible Bomber Jacket\n   - Color Options: Vintage Brown/Black, Modern Grey/White\n   - Material: Faux leather with reversible design\n   - Features: Bomber style, zip closure, rib-knit collar and cuffs\n   - Best For: Versatile streetwear\n   - Special Feature: Two looks in one with a reversible design.",
         
         " Reversible Bomber Jacket\n   - Color Options: Navy/Red, Olive/Khaki\n   - Material: Polyester with reversible functionality\n   - Features: Classic bomber style, zip-front closure\n   - Best For: Casual and trendy outfits\n   - Special Feature: Easily switch between two stylish looks with the reversible design.",
         
         " Long Houndstooth Coat\n   - Color Options: Classic Black/White, Elegant Camel/Brown\n   - Material: Wool-blend fabric\n   - Features: Long coat with houndstooth pattern, button-front closure\n   - Best For: Formal occasions and chilly days\n   - Special Feature: Timeless houndstooth pattern for a sophisticated look.",
         
         "True Neutrals Feathers Jacket\n   - Color Options: Earthy Taupe, Neutral Beige\n   - Material: Lightweight feathers with polyester shell\n   - Features: Short-length, zip-front closure\n   - Best For: Mild weather and casual outings\n   - Special Feature: Neutral tones for easy pairing with any outfit.",
         
         " Thermo-Sealed Puffer Coat\n   - Color Options: Frosty Blue, Alpine White\n   - Material: Thermo-sealed nylon shell, synthetic insulation\n   - Features: Puffer style, hooded, zip-front closure\n   - Best For: Extremely cold temperatures\n   - Special Feature: Thermo-sealed technology for maximum insulation.",
       ];
       initializeProductDetails(productDetailsArray);
       $('#footer').load('../HeaderFooter/footer.html');
    //    $('#header').load('/MainFiles/HeaderFooter/header.html');


            </script>
                      <script src="../HeaderFooter/footerStyle.js"></script>

</body>
</html>