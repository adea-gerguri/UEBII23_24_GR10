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
    <link href="../WomanPage/dress.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../WomanPage/checkdress.css" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <title>Dress</title>
    <style>
        .popup img{
            width: 600px;
            height: 500px;
            margin-top: 120px;
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


            <div id="front" class="front_page_dresses">
               
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../../ImagesWoman/ImgBags/ImgDress/front_page_dresses.jpg" class="d-block w-100" alt="...">
                  </div>
                
              </div>
     <!--Product-->

    <div class="container-fluid">
        <div  class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                <img alt="Dior" class="firstImage" src="../../ImagesWoman/ImgBags/ImgDress/belted_mid_length_dress_dior.png">
                <p class=" firstParagraph">BELTED MID-LENGTH DRESS</p>
                <p class="qmimi">1250$</p>
                <p class="goToProduct">Go To Product</p>
            </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="Balenciaga" class="firstImage" src="../../ImagesWoman/ImgBags/ImgDress/cut_out_maxi_balenciaga.png">
                    <p class="firstParagraph">CUT-OUT MAXI DRESS IN BLACK </p>
                    <p class="qmimi">1750$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>            </div>
            <div class="col-md-4">   
                <a class="linkToBuy"  onclick="openPopup()">
                <img  alt="Dior" class="firstImage" src="../../ImagesWoman/ImgBags/ImgDress/denim_short_raw_blue_dress_dior.png ">
                <p class="firstParagraph">DENIM COUTURE SHIRT DRESS
                </p>
                <p class="qmimi">780$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="Hermes" class="firstImage" src="../../ImagesWoman/ImgBags/ImgDress/shirt_dress_hermes.png">
                    <p class="firstParagraph">SHIRT DRESS</p>
                    <p class="qmimi">2175$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy"onclick="openPopup()">
                    <img alt="Louis Vuitton" class="firstImage" src="../../ImagesWoman/ImgBags/ImgDress/louis-vuitton-graphic-lv-signature-t-shirt-dress.png">
                    <p class="firstParagraph">GRAPHIC LV SIGNATURE T-SHIRT DRESS
                    </p>
                    <p class="qmimi">1252$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4">  
                   <a class="linkToBuy" onclick="openPopup()">
                <img alt="Louis Vuitton" class="firstImage" src="../../ImagesWoman/ImgBags/ImgDress/louis-vulv-fin-flounce-jacquard-dress.png">
                <p class="firstParagraph">FIN FLOUNCE JACQUARD DRESS </p>
                <p class="qmimi">1300$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
    </div>
    
<!--Footer-->
        <div id="footer"></div>

        <div class="container">

            <div class="popup" id="popup">

                    <img class="productImage"  src="../../ImagesWoman/ImgBags/ImgDress/belted_mid_length_dress_dior.png">
                    <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                    <form id="formDetails" class="formDetails" >
                    <div class="allInfo">
                    <p class="productName">AAA</p>
                    <p class="ref">XY567Z</p>
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

            <div class="container">

           
        
          

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
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="../KidsPage/script.js"></script> 
          <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
          <script>
          const productDetailsArray = 
          [" BELTED MID-LENGTH DRESS\n -A hallmark Dior silhouette, the mid-length dress combines modernity and elegance.\n-Crafted in beige cotton gabardine.\n -Tonal belt.\n -Concealed front button closure.\n-Removable Dior Tribales cufflinks.\n-100% cotton.",
           
           " CUT-OUT MAXI DRESS IN BLACK\n-Carbon footprint: we work to continually reduce the environmental footprint of our products.\n -• Light jersey.\n-Fitted.\n -Round neck.\n -Rounded cut-out at back and sides.\n -Long sleeves.\n Maxi length",
           
           " DENIM COUTURE SHIRT DRESS\n -The shirt dress is reinterpreted this season in a couture variation.\n The shirt dress can be paired with ballet pumps from the collection for a refined look.\n -Embroidered bee emblem.\n  -Removable Christian Dior signature belt.\n-Front button closure.\n",
           
           " SHIRT DRESS\n -Classic collar.\n -Middle front hidden button facing fastening with Clou de Selle engraved mother-of-pearl buttons.\n -Cuffs fastening with enameled buttons.\n -Waist with knotted belt in cotton twill.\n -Front pocket with Caleche embroidery",
           
           " GRAPHIC LV SIGNATURE T-SHIRT DRESS\n -This staple T-shirt dress is crafted from soft cotton jersey that has been overdyed for a breezy vintage look.\n -The straight-cut silhouette is oversized for a casual, comfortable fit, while a large 3D-effect Louis Vuitton signature adds a graphic House touch to the front.",
           
           " FIN FLOUNCE JACQUARD DRESS \n -Romantic textures elevate this clean-cut dress with the collection’s fantastical aquatic spirit.\n -Cut in a classic A-line silhouette from a silk-blend jacquard detailed with an intricate coral motif in relief.\n -Main Material : 77% Polyester, 13% Silk, 10% Polyamide "]
 
 initializeProductDetails(productDetailsArray)
 $('#footer').load('../HeaderFooter/footer.html');
// $('#header').load('/MainFiles/HeaderFooter/header.html');

          </script>
          <script src="../HeaderFooter/footerStyle.js"></script>

</body>
</html>