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
            width: 450px;
            height: 550px;
        }
        svg{
          display: block;
           margin: auto;
           margin-top: -25px;
        }
    </style>
    <title>Sweaters</title>
</head>
<body class="finalStep">
    <div id="header"></div>


    <div class="container-fluid">
        
        <div  class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()">
                <img alt="menSweaters" class="firstImage" src="../../ImagesMen/sweatersImages/imageedit_6_8233555914.png">
                <p id="firstOne" class=" firstParagraph">
                    Dolce & Gabbana
                    Men's Gray Cashmere Sweater </p>
                <p class="qmimi">301.86$</p>
                <p class="goToProduct">Go To Product</p>
            </a>
            </div>
            <div id="dd" class="col-md-4">
                <a class="linkToBuy"  onclick="openPopup()">
                    <img alt="menSweaters" class="firstImage" src="../../ImagesMen/sweatersImages/imageedit_4_9003367639.png">
                    <p class="firstParagraph"> Dolce & Gabbana Men's Black Knitwear </p>
                    <p class="qmimi">691.00$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>            
            </div>
            <div class="col-md-4">   
                  <a class="linkToBuy"onclick="openPopup()">
                <img  alt="menSweaters" class="firstImage" src="../../ImagesMen/sweatersImages/imageedit_17_7122420708.png">
                <p class="firstParagraph">Nike Football  Men's Pullover Hoodie
                </p>
                <p class="qmimi">65$</p>
                <p class="goToProduct">Go To Product</p>
            </a></div>
           
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="linkToBuy" onclick="openPopup()" >
                    <img alt="menSweaters" class="firstImage" src="../../ImagesMen/sweatersImages/imageedit_19_9877327538.png">
                    <p class="firstParagraph">Amiri Sweatshirt </p>
                    <p class="qmimi">267.94$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4" >
                <a class="linkToBuy" onclick="openPopup()">
                    <img alt="menSweaters" class="firstImage" src="../../ImagesMen/sweatersImages/imageedit_21_5943539289.png">
                    <p class="firstParagraph">Palm Angels Sweatshirt, Red Coton                 </p>
                    <!-- <p class="ref">J1232</p> -->

                    <p class="qmimi">177.66$</p>
                    <p class="goToProduct">Go To Product</p>
                </a>
            </div>
            <div class="col-md-4"> 
                    <a class="linkToBuy" onclick="openPopup()">
                <img alt="menSweaters" class="firstImage" src="../../ImagesMen/sweatersImages/imageedit_23_3857292527.png">
                <p class="firstParagraph">Dolce & Gabbana sweatshirt, black Cotton </p>
                <p class="qmimi">168.92$</p>
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
                                    <img  class="productImage" src="../../ImagesMen/sweatersImages/imageedit_25_5774521708.png">
                                    <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                                    <form id="formDetails"  class="formDetails" >
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
                                "  Dolce & Gabbana Men's Gray Cashmere Sweater\n   - Color Options: Midnight Navy, Charcoal Heather, Grey/Black, White/Black\n   - Material: Tech Fleece fabric\n   - Features: Full-zip closure, adjustable hood\n   - Best For: Casual wear and outdoor activities\n   - Special Feature: Tech Fleece for lightweight warmth and comfort.",
                                
                                " Dolce & Gabbana Men's Black Knitwear\n   - Color Options: Black/white, Grey/Black\n   - Material: Cotton blend\n   - Features: Trefoil logo, kangaroo pocket\n   - Best For: Streetwear and casual occasions\n   - Special Feature: Iconic Trefoil logo for a classic look.",
                                
                                " Nike Football  Men's Pullover Hoodie\n   - Color Options: Olive Night, Red/Black, Red/White Peacoat\n   - Material: Cotton and polyester blend\n   - Features: Fleece lining, ribbed cuffs and hem\n   - Best For: Everyday comfort and warmth\n   - Special Feature: Soft fleece lining for added coziness.",
                                
                                " Amiri Sweatshirt\n   - Color Options:  Black/White,  Green/White, Gray/White\n   - Material: Cotton and polyester blend\n   - Features: Loose fit, front kangaroo pocket\n   - Best For: Training and sports activities\n   - Special Feature: Moisture-wicking fabric for quick-drying performance.",
                                
                                " Palm Angels Sweatshirt, Red Coton   \n   - Color Options: TNF Black,  Red/White, Asphalt Grey\n   - Material: Cotton and polyester blend\n   - Features: Logo graphic, kangaroo pocket\n   - Best For: Outdoor adventures and casual wear\n   - Special Feature: Classic Half Dome logo for a timeless style.",
                                
                                " Dolce & Gabbana sweatshirt, black Cotton\n   - Color Options: Black/White, Collegiate Navy\n   - Material: Polyester MTR filament fleece\n   - Features: Full-zip closure, zippered pockets\n   - Best For: Hiking and outdoor activities\n   - Special Feature: Lightweight fleece for versatile layering.",
                            ];
                        
                            initializeProductDetails(productDetailsArray);
                            $('#footer').load('../HeaderFooter/footer.html');
                            // $('#header').load('/MainFiles/HeaderFooter/header.html');

          </script>
          <script src="../HeaderFooter/footerStyle.js"></script>
                        
</body>
</html>