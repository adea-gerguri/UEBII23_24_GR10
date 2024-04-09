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
    <link href="../MenPage/menPage.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="pr econnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../KidsPage/checkout.css" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <style>
        .popup img{
            width: 590px;
            height: 600px;
        }
        svg{
          display: block;
           margin: auto;
           margin-top: -25px;
        }
    </style>
    <title>Shoes</title>
</head>
<body class="finalStep">



    <div id="header"></div>


    <div class="container-fluid">
        <div  class="row">
            <div class="row"></div>
                <div class="row"></div>
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                <img alt="NikeShoes" class="firstImage" src="../../ImagesMen/shoesImages/imageedit_11_9852282232.png">
                <p id="firstOne" class=" firstParagraph">Nike P-6000 </p>
                <p class="qmimi">110$</p>
                <p class="goToProduct">Go To Product</p>
            </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy"  onclick="openPopup()">
                    <img alt="NikeShoes" class="firstImage" src="../../ImagesMen/shoesImages/imageedit_1_6192961676.png">
                    <p class="firstParagraph"> Jumpman Two Trey </p>
                    <p class="qmimi">116.97$ </p>
                    <p class="goToProduct">Go To Product</p>
                </a>            
            </div>
            <div class="col-md-4">   
                  <a class="linkToBuy"onclick="openPopup()">
                <img  alt="NikeShoes" class="firstImage" src="../../ImagesMen/shoesImages/imageedit_5_8279078519.png">
                <p class="firstParagraph">Nike Air Flight Huarache
                </p>
                <p class="qmimi">93.97$ </p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()" >
                    <img alt="NikeShoes" class="firstImage" src="../../ImagesMen/shoesImages/imageedit_7_8008172537.png">
                    <p class="firstParagraph">Jordan Jumpman Pro </p>
                    <p class="qmimi">145$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4" >
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="NikeShoes" class="firstImage" src="../../ImagesMen/shoesImages/imageedit_7_8488995033.png">
                    <p class="firstParagraph">Nike Zoom Vomero 5                  </p>
                    <!-- <p class="ref">J1232</p> -->

                    <p class="qmimi">160$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4"> 
                    <a class="linkToBuy" onclick="openPopup()">
                <img alt="NikeShoes" class="firstImage" src="../../ImagesMen/shoesImages/imageedit_9_2166994431.png">
                <p class="firstParagraph">Air Jordan 1 High OG "Royal Reimagined" </p>
                <p class="qmimi">180$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        
    </div>

    <div id="footer"></div>
                        <div class="container">
                            
                            <div class="popup" id="popup">
                                <div class="row"></div>
                                <div class="row"></div>
                                <div class="row"></div>
                                    <img  class="productImage" src="../../KidsImages/imageedit_1_3949189767.png">
                                    <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                                    <form id="formDetails"  class="formDetails" >
                                    <div class="allInfo">
                                    <p class="productName">AAA</p>
                                    <p class="ref">XYZ</p>
                                    <p class="prductPrice">100</p>
                                    <p class="allSizes"></p>
                                    <select class="size" name="size">
                                        <option name="l">39</option>
                                        <option name="l">39.5</option>
                                        <option name="l">40</option>
                                        <option name="l">40.5</option>
                                        <option name="l">41</option>
                                        <option name="l">41.5</option>
                                        <option name="l">42</option>
                                        <option name="l">42.5</option>
                                        <option name="l">43</option>
                                        <option name="l">43.5</option>
                                        <option name="l">44</option>
                                    </select>
                                    <input class="submitButton" type="submit"  value="Click & Collect">
                                    <button type="button" class="productDetails btn-demo" data-toggle="modal" data-target="#myModal2"> Product Details</button>
                                </form>
                                </div>
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
                          <script>
                            const productDetailsArray = [
                                " Nike P-6000\n   - Color Options: Red/Black, Blue/White,  White/Fire Red\n   - Upper Material: Mesh and synthetic materials\n   - Midsole: Air-Sole unit for responsive cushioning\n   - Outsole: Durable rubber with circular traction pattern\n   - Best For: Running and casual wear\n   - Special Feature: Retro-inspired design.",
                                
                                " Jumpman Two Trey\n   - Color Options: Black/White/Red, Black/Silver\n   - Upper Material: KnitPosite construction for breathability\n   - Midsole: Zoom Air unit for impact protection\n   - Outsole: Translucent rubber with multidirectional traction pods\n   - Best For: Basketball and street style\n   - Special Feature: Inspired by basketball performance.",
                                
                                " Nike Air Flight Huarache'\n   - Color Options: Brown/Burgundy/Black/White\n   - Upper Material: Premium suede and canvas\n   - Midsole: Encapsulated Air unit for comfort\n   - Outsole: Rubber cupsole with circular tread pattern\n   - Best For: Casual wear and urban exploration\n   - Special Feature: Limited edition summer release.",
                                
                                " Jordan Jumpman Pro\n   - Color Options: White/Black, Grey/White\n   - Upper Material: Full-grain leather\n   - Midsole: Air-Sole unit for cushioning\n   - Outsole: Non-marking rubber with pivot points\n   - Best For: Streetwear and everyday use\n   - Special Feature: Classic basketball shoe design.",
                                
                                " Nike Zoom Vomero 5  \n   - Color Options: Blue/White, Black/White Green/Black\n   - Upper Material: Mesh and synthetic overlays\n   - Midsole: EVA foam for responsive cushioning\n   - Outsole: Rubber with pivot point for durability\n   - Best For: Running and street style\n   - Special Feature: Comfortable and supportive fit.",
                                
                                " Air Jordan 1 High OG 'Royal Reimagined'\n   - Color Options: Black/White/Red, Blue/White/Black, Green/White\n   - Upper Material: Genuine and synthetic leather\n   - Midsole: Encapsulated Air-Sole unit for comfort\n   - Outsole: Solid rubber with pivot point\n   - Best For: Basketball-inspired fashion\n   - Special Feature: Iconic Air Jordan 1 silhouette.",
                            ];
                        
                            initializeProductDetails(productDetailsArray)
                            $('#footer').load('../HeaderFooter/footer.html');
                            // $('#header').load('../HeaderFooter/header.html');

          </script>
          <script src="../HeaderFooter/footerStyle.js"></script>
                        
</body>
</html>