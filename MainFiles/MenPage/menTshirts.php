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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="pr econnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../KidsPage/checkout.css" rel="stylesheet">
    <link href="../MenPage/menPage.css" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <style>
        .popup img{
            width: 450px;
            height: 550px;
        }
        svg{
          display: block;
           margin: auto;
           margin-top: -25px;
        }
    </style>
    <title>T Shirts</title>
</head>
<body class="finalStep">

    <div id="header"></div>

    <div class="container-fluid">
      
        <div  class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                <img alt="menTshirts" class="firstImage" src="../../ImagesMen/TshirtsImages/imageedit_27_5167560882.png">
                <p id="firstOne" class=" firstParagraph">
                    PARIS TROPICAL T-SHIRT MEDIUM FIT IN BLACK </p>
                <p class="qmimi"> 895$</p>
                <p class="goToProduct">Go To Product</p>
            </a>
            </div>
            <div class="col-md-4">
                <a class="linkToBuy"  onclick="openPopup()">
                    <img alt="menTshirts" class="firstImage" src="../../ImagesMen/TshirtsImages/imageedit_29_2761331681.png">
                    <p class="firstParagraph"> WFP T-SHIRT MEDIUM FIT IN DARK BLUE/WHITE </p>
                    <p class="qmimi"> 525$  </p>
                    <p class="goToProduct">Go To Product</p>
                </a>            
            </div>
            <div class="col-md-4">   
                  <a class="linkToBuy"onclick="openPopup()">
                <img  alt="menTshirts" class="firstImage" src="../../ImagesMen/TshirtsImages/imageedit_30_4305654869.jpg">
                <p class="firstParagraph">T-SHIRT LARGE FIT IN GREEN/BLACK/BLUE
                </p>
                <p class="qmimi">675$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()" >
                    <img alt="menTshirts" class="firstImage" src="../../ImagesMen/TshirtsImages/imageedit_32_6932380052.png">
                    <p class="firstParagraph">Balenciaga T-SHIRT Pink, Cotton </p>
                    <p class="qmimi">269.26$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4" >
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="menTshirts" class="firstImage" src="../../ImagesMen/TshirtsImages/tshirt1.png">
                    <p class="firstParagraph"> Balenciaga T-SHIRT White, Cotton                 </p>
                    <!-- <p class="ref">J1232</p> -->

                    <p class="qmimi">56.36$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4"> 
                    <a class="linkToBuy" onclick="openPopup()">
                <img alt="menTshirts" class="firstImage" src="../../ImagesMen/TshirtsImages/imageedit_36_9845256585.png">
                <p class="firstParagraph">Ami T-SHIRT Pink, Cotton </p>
                <p class="qmimi">72.64$ </p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        
    </div>

    <div id="footer"></div>
        <div class="container">

                            <div class="popup" id="popup">
                                <div class="row">22</div>
                                <div class="row">22</div>
                                <div class="row">22</div>
                                    <img  class="productImage" src="../../ImagesMen/TshirtsImages/Medium-764235TPVU41569_F.jpg">
                                    <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                                    <form  id="formDetails" class="formDetails" >
                                    <div class="allInfo">
                                    <p class="productName">AAA</p>
                                    <p class="ref">XYZ</p>
                                    <p class="prductPrice">100</p>
                                    <p class="allSizes"></p>
                                    <select class="size" name="size">
                                        <option name="s">S</option>
                                        <option name="m">M</option>
                                        <option name="l">L</option>
                                        <option name="xl">XL</option>
                                        <option name="xxl">XXL</option>
                                        <option name="xxl">XXXL</option>
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
                                "  PARIS TROPICAL T-SHIRT MEDIUM FIT IN BLACK\n   - Color Options: White, Black, Gray\n   - Material: 100% Cotton\n   - Features: Classic crewneck, short sleeves\n   - Best For: Everyday casual wear\n   - Special Feature: Simple and versatile design for various occasions.",
                               
                                "  WFP T-SHIRT MEDIUM FIT IN DARK BLUE/WHITE\n   - Color Options: Navy Blue, Heather Red\n   - Material: Soft cotton blend\n   - Features: Unique graphic print, crewneck\n   - Best For: Casual outings and streetwear\n   - Special Feature: Eye-catching graphic design for a trendy look.",
                               
                                "  T-SHIRT LARGE FIT IN GREEN/BLACK/BLUE\n   - Color Options: Charcoal, Green, Black, Yellow, Olive Green\n   - Material: Comfortable cotton\n   - Features: V-neckline, short sleeves\n   - Best For: Stylish and relaxed everyday wear\n   - Special Feature: V-neck adds a touch of sophistication to a classic style.",
                               
                                "  Balenciaga T-SHIRT Pink, Cotton\n   - Color Options: Urban Black, Green, Street Gray\n   - Material: Streetwear-inspired fabric blend\n   - Features: Longline cut, extended sleeves\n   - Best For: Streetwear fashion enthusiasts\n   - Special Feature: Trendy longline design for a modern street look.",
                               
                                " Balenciaga T-SHIRT White, Cotton\n   - Color Options: Faded Denim, Pink, Red,  Vintage White\n   - Material: Soft washed cotton\n   - Features: Vintage-inspired wash, crewneck\n   - Best For: Retro and casual styles\n   - Special Feature: Vintage wash for a worn-in, lived-in feel.",
                               
                                " Breathable Performance Tee\n   - Color Options: Royal Blue, Gray, Black, Neon Green\n   - Material: Moisture-wicking fabric\n   - Features: Athletic fit, short sleeves\n   - Best For: Sports and outdoor activities\n   - Special Feature: Breathable fabric keeps you cool during workouts.",
                               
                                // Maica-specific product
                                " Ami T-SHIRT Pink, Cotton\n   - Color Options:  Pink, Red, Black, Yellow\n   - Material: Maica-special cotton blend\n   - Features: Maica-exclusive logo, crewneck\n   - Best For: Exclusive and stylish looks\n   - Special Feature: Maica-exclusive colors and logo design."
                            ];
                        
                            initializeProductDetails(productDetailsArray);
                            $(  '#footer').load('../HeaderFooter/footer.html');
                            // $('#header').load('/MainFiles/HeaderFooter/header.html');

          </script>
          <script src="../HeaderFooter/footerStyle.js"></script>
                        
</body>
</html>