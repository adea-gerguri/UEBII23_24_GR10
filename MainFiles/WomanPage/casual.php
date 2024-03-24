<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../HeaderFooter/header.html'?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="/MainFiles/MenPage/menTshirts.css" rel="stylesheet"> -->
    <link href="../KidsPage/kidsShoes.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="pr econnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../KidsPage/checkout.css" rel="stylesheet">
    <link href="../KidsPage/kidsShoes.css" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <title>Casual</title>
    <style>
            .popup img{
            width: 450px;
            height: 550px;
            margin-top: 100px;
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
                <img alt="Dior" class="firstImage" src="../../ImagesWoman/casual/boucle_mohair_miniskirt.png">
                <p class=" firstParagraph">OFF-PISTE SKI BACKPACK HERMES</p>
                <p class="qmimi">1250$</p>
                <p class="goToProduct">Go To Product</p>
            </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="Balenciaga" class="firstImage" src="../../ImagesWoman/casual/Five-pocket velvet denim jeans.png">
                    <p class="firstParagraph">PURSANGLE TOTE BAG HERMES </p>
                    <p class="qmimi">1750$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>            </div>
            <div class="col-md-4">   
                <a class="linkToBuy"  onclick="openPopup()">
                <img  alt="Dior" class="firstImage" src="../../ImagesWoman/casual/flared-pants_dior.png ">
                <p class="firstParagraph">ROSEAUS HOBO BAG TURTLEDOVE 
                </p>
                <p class="qmimi">780$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="Hermes" class="firstImage" src="../../ImagesWoman/casual/louis-vuitton-signature-wrap-coat.png">
                    <p class="firstParagraph">MEDIUM CHAIN BAG BALENCIAGA</p>
                    <p class="qmimi">2175$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div id="ll" class="col-md-4">
                <a class="linkToBuy"onclick="openPopup()">
                    <img alt="Louis Vuitton" class="firstImage" src="../../ImagesWoman/casual/trench_coat_dior.png">
                    <p class="firstParagraph">NANO-ALMA MONOGRAM LOUIS VUITTON
                    </p>
                    <p class="qmimi">1252$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4">  
                   <a class="linkToBuy" onclick="openPopup()">
                <img alt="Louis Vuitton" class="firstImage" src="../../ImagesWoman/casual/v11.png">
                <p class="firstParagraph">DIRO BOOK TOTE </p>
                <p class="qmimi">3300$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        
    </div>
    <div id="footer"></div>

        <div class="container">

            <div class="popup" id="popup">

                    <img class="productImage"  src="../../ImagesWoman/casual/boucle_mohair_miniskirt.png">
                    <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                    <form id="formDetails" class="formDetails" >
                    <div class="allInfo">
                    <p class="productName">AAA</p>
                    <p class="ref">XYZ</p>
                    <p class="prductPrice">100</p>
                    <p class="allSizes"></p>
                    <select class="size" name="size">
                        <option name="xs">XS</option>
                        <option name="s">S</option>
                        <option name="m">M</option>
                        <option name="l">L</option>
                        <option namw="xl">XL</option>
                    </select>
                    <input class="submitButton" type="submit"  value="Click & Collect">
                    <button type="button" class="productDetails btn-demo" data-toggle="modal" data-target="#myModal2"> Product Details</button>
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
          <script src="../KidsPage/script.js"></script> 
          <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

</body>

<script>
$('#footer').load('../HeaderFooter/footer.html');
// $('#header').load('/MainFiles/HeaderFooter/header.html');

          </script>
          <script src="../HeaderFooter/footerStyle.js"></script>

</html>