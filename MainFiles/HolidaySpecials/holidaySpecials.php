<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../HeaderFooter/header.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Holiday Specials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./holidaySpecialscss/holidaySpecials.css" rel="stylesheet">
    <link rel="stylesheet" href="./holidaySpecialscss/checkoutss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <style>
      *{
        font-family: 'Montserrat', sans-serif;
      }
       
        section {
            margin-left: 55px;
        }

        #van_cleef {
            position: relative;
        }

        #underline {
            position: absolute;
            height: 1px;
            background-color: lightcoral; 
            width: 0;
            transition: width 0.2s ease-in-out;
        }
        #typing-container {
            height: 150px; 
            
        }

        #typing-text {
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid #fff;
            font-size: 24px;
            margin: 0;
            letter-spacing: 4px;
            animation: typing 5s steps(34) forwards;
        }
        svg{
          display: block;
           margin: auto;
           margin-top: -25px;
        }
        .paused{
           animation-play-state: paused;
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }
    
    </style>
    
    
</head>
<body>
    
  <div id="header"></div>

    <div id="video-container">
        <video autoplay muted loop>
          <source src="./video/dior_video_holiday_specials.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
    
        <div class="text-over">
          <div col-md-6>
            <button class="btn btn-lg btn-primary gray-layered-btn" id="dior_btn" onclick="openPopupp()">
                <p style="color:rgb(183, 183, 182)" id="text-to-change" class="original-text" onmouseover="changeText()" onmouseout="resetText(this)">Order Dior's Advent Calendar</p>
            </button>
            <div class="popupp special" id="popupp">
              <h4>Type the code below for a 25% discount</h4>
              <br>
              
              <h5>cdjn-4567-8930</h5>
              <button class="btn btn-md"  onclick="closePopupp()" id="okay_btn">Okay</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
            <p class="dior-section">
                "At night, stretched out in the magical Dior gardens, looking north, I gaze up to the constellations around the North Star that seem to play in the twinkling sky. I breathe in the heady scent of the flowers. Their fragrance mingles with the magic of the constellations, bringing this fantastic scene to life." 
                <br>
                - Pietro Ruffo -
                <br>
                Pietro Ruffo, friend of the House of Dior, has imagined a magical and luxurious astral world where a profusion of flowers, wondrous constellations, stardust and fantastic beasts mix.
                <br>
                Open each of the 24 windows of the Advent calendar one by one, and discover a new Dior surprise to fill each day in December until Christmas with magic and wonder.
            </p>
        </div>
        <div class="col-md-6" class="text-over">
            <img id="calendar"style="margin-top: 55px; margin-left: 180px;" src="../HolidaySpecials/holidayspecialsIMG/dior-adv-clnd.jpg" alt="2023 Dior Advent Calendar" width="550px">
            <button class="btn btn-lg btn-primary gray-layered-btn" id="adv-clnd-btn"><a href="https://adventcalendar.co.uk/dior-advent-calendar/"><p>Details</p></a></button>

        </div>
    </div>
    
    <br>
    <article>
        <h3 id="women" style="text-align: center; color: aliceblue;"><a href="#" style="color:aliceblue">Soon to Come - Herm&egraves Specials</a></h3>
    </article>
    <br>
    <br>
    <section>
      <div class="row">
        <div class="col-md-4">
          <a  >
          <img src="../HolidaySpecials/holidayspecialsIMG/hermes_purse.jpg" alt="Hermes Purse" style="width:550px" class="card">
        </a>
        </div>
        <div class="col-md-4">
          <a >
          <img src="../HolidaySpecials/holidayspecialsIMG/amuletes_constance_pendant.jpg" alt="Hemres pendant" class="hermes_ad" id="pendant" class="card"></a>
          <a >
          <img src="../HolidaySpecials/holidayspecialsIMG/H_long_sleeve_cardigan.jpg" alt="Long sleeve cardigan from hermes" class="hermes_ad" style="margin-top: -1376px; margin-left:250px" class="card"></a>
          </div>
          <div class="col-md-4"> 
            <a  >
            <img src="../HolidaySpecials/holidayspecialsIMG/helia_60_sandal.jpg" alt="Helia 60 sandal" class="hermes_ad" style="margin-left:75px" class="card"></a>
            <a >
            <img src="../HolidaySpecials/holidayspecialsIMG/davis_h_sellier_cap.jpg" alt="Davis Hellier cap from Hermes" class="hermes_ad" style="margin:50px 50px 0px 75px" class="card"></a>
            </div>
      </div>
    </section>
   
    <article style="text-align: center; margin-top: -150px;" > 
        <h2 id="van_cleef" style="color:whitesmoke; position:relative;">
              SEVEN on SALE 
          </h2>
          
    </article> 
    <br>

  <!--Products-->
  
  <div class="container-fluid">
    <div  class="row">
        <div class="col-md-4 cl4">
            <a class="linkToBuy" onclick="openPopup()">
            <img alt="Balenciaga ski" class="pImage"
            src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/helmet-in-black-eps-and-abs-balenc-woutbg.png">
            <p id="firstOne" class=" firstParagraph">Helmet in Black - Balenciaga</p>
            <p class="qmimi">800 &euro;</p>
            <p class="goToProduct">Go To Product</p>
        </a>
        </div>
        <div class="col-md-4 cl4"  >
            <a class="linkToBuy"  onclick="openPopup()">
                <img alt="cardigan" class="pImage" src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/nappa-leather-jacket-prada-woutbg.png">
                <p class="firstParagraph">Nappa Leather Jacket - Prada</p>
                <p class="qmimi">4000 &euro;</p>
                <p class="goToProduct">Go To Product</p>
            </a>            
        </div>
         
        <div class="col-md-4 cl4">   
          <a class="linkToBuy" onclick="openPopup()">
        <img alt="Carry Dog Bag" class="pImage" src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/carrying-bag-for-dogs-hermes-woutbg.png">
        <p class="firstParagraph">Carrying bag for dogs - H&egrave;rmes</p>
        <p class="qmimi">1770 &euro;</p>
        <p class="goToProduct">Go To Product</p>
    </a></div>
    </div>

    <div class="row">
        <div class="col-md-4 cl4">   
            <a class="linkToBuy"onclick="openPopup()">
          <img  alt="ski sneaker" class="pImage" src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/men-skiwear-ski-sneaker-in-black-woutbg.png ">
          <p class="firstParagraph"> Ski Sneaker - Balenciaga</p>
          <p class="qmimi">1200 &euro;</p>
          <p class="goToProduct">Go To Product</p>
      </a></div>
        <div id="parfum" class="col-md-4 cl4">
            <a class="linkToBuy" onclick="openPopup()">
                <img alt="Chanel perfume" class="pImage" src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/N-5-eau-de_parfum-woutbg.png">
                <p class="firstParagraph">N&deg;5 Chanel</p>
                <p class="qmimi">77 &euro;</p>
                <p class="goToProduct">Go To Product</p>
            </a>
        </div>
        <div class="col-md-4 cl4"> 
          <a class="linkToBuy" onclick="openPopup()">
      <img alt="nikexlv" class="pImage" src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/garden-party-pockets-vertical-bag-hermes-woutbg.png">
      <p class="firstParagraph">Vertical Bag - Hermes </p>
      <p class="qmimi">278 &euro;</p>
      <p class="goToProduct">Go To Product</p>
     </a>
    </div>
    <div class="col-md-4 cl4"> 
      <a class="linkToBuy" onclick="openPopup()">
  <img alt="nikexlv" class="pImage" src="../HolidaySpecials/holidayspecialsIMG/ProductsIMGS/paris-loafer_-_172109Z_1D-side-wm-4-0-0-800-800_g-removebg-preview.png">
  <p class="firstParagraph pro">Paris Loafer - Hermes </p>
  <p class="qmimi">278 &euro;</p>
  <p class="goToProduct">Go To Product</p>
 </a>
    </div>
</div> 

    <br><br>
    <article style="text-align: center;" >
        <h2 id="van_cleef" style="color:whitesmoke; position:relative;">
              CGI in Maison de Dior 
          </h2>
          
    </article>
        <div id="underline"></div>
        <div class="row">
<div class="col-md-6 mx-auto">
    <div id="typing-container" style="height: auto; overflow: hidden;">
        <p class="dior-section paused" id="typing-text" style="margin-top: 30px;">
            Excitement is in the pixels! Experience the <abbr  style="text-decoration: none;"  title="Computer-generated imagery"> CGI </abbr>.</p>
        <br>
        <p class="cgi" style="font-size: 24px;  letter-spacing: 3px; line-height:40px;" >
            Experience fashion in a whole new light. 
            <br>
            Dior's captivating <abbr style="text-decoration: none;" title="Computer-generated imagery"> CGI </abbr> presentation is on the horizon.
            <br>
            <br>
            And it is promising a visual masterpiece that pushes the boundaries of style and storytelling.
        </p>
    </div>
</div>
        <div class="col-md-5" style="display: flex; align-items: center; justify-content: right;" >
          <img id="fade" src="../HolidaySpecials/holidayspecialsIMG/dior_cgi.jpg" alt="dior cgi" height="325px" style="margin-top: 50px;">
      </div>
      </div>
    </div>
      </div>
  </div>

  <!--Footer-->
  <div class="fnd">
    <div class="fndi">
    <h2 class="ff">Help</h2>
        <a href="../ContactUs/contactUs.html" class="help">Our Client Services are available<br> for call
            from 9 AM to 6 PM <br> Monday to Thursday.</a>
        <a href="../ContactUs/contactUs.html" class="help">Email Services are available 24/7</a>
        <a href="../ContactUs/contactUs.html" class="help">CONTACT US</a>
        <br>
        <a href="mailto:support@rhae.com" class="help">EMAIL: support@rhae.com</a>
        <br>
    
    </div>
    <div  class="fndi">
      <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="50" cy="50" rx="25" ry="10" stroke="black" stroke-width="5"/>
        <circle cx="50" cy="50" r="12" fill="lightgray"/>
    </svg>
    
    
    
        <h2 style="text-align: center;">About Us & Partners</h2>
        <a href="https://us.louisvuitton.com/eng-us/homepage" class="about" target="_blank">Louis Vuitton</a><br>
        <a href="https://www.chanel.com/us/" class="about" target="_blank">Chanel</a><br>
        <a href="https://www.dior.com/en_int?gclid=CjwKCAiAp5qsBhAPEiwAP0qeJtcJor14LEPV17q88vPtF6EpKilwbDPElYrCOkrBDxj0Q4HwVjDTjBoCNkIQAvD_BwE" class="about" target="_blank">Dior</a><br>
        <a href="https://www.hermes.com/us/en/" class="about" target="_blank">Hermes</a><br>
        <a href="https://www.nike.com/" class="about" target="_blank">Nike</a><br>
        <a href="https://www.prada.com/us/en.html" class="about" target="_blank">Prada</a><br>
        <a href="https://www.balenciaga.com/en-en" class="about" target="_blank">Balenciaga</a><br>
        <h1 style="color:black; text-align: center;">RHAE</h1>
        </div>
        <div class="fndi">
            <h2 style="text-align: center;">Email Sign-Up</h2>
           <p class="entireParagraph"><a href="../signUp/signUp.html" style="text-decoration: underline; color: black;">Sign up</a> for RHAE emails and receive the<br> latest news from La Maison, including<br> exclusive online  pre-launches<br> and new collections.</p>
            </div>
    </div>

    <div class="container">

        <div  class="popup" id="popup">

                <img style="margin-top: 150px;"  class="productImage" src="../HolidaySpecials/holidayspecialsIMG/hermes_purse.jpg">
                <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
                <form id="formDetails" class="formDetails" >
                <div class="allInfo">
                  <p class="productName" style="color: black; ">AAA</p>
                  <p class="ref" style="color: black;">XYZ</p>
                  <p class="prductPrice" style="color: black;">100</p>
                  <p class="allSizes"></p>
                  <select class="size" name="size">
                    <option name="s">S</option>
                    <option name="m">M</option>
                    <option name="l">L</option>
                  </select>
                  <input class="submitButton" type="submit"  value="Click & Collect">
                  <button type="button" class="productDetails btn-demo" data-toggle="modal" data-target="#myModal2"> Product Details</button>
                </div>
            </form>
            
        </div>  
      
      </div>
    </div>

    <div  class="container demo">
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
    
    <!--For the 25% discount-->
    <script src="../KidsPage/script.js"></script>

    <script src="../HolidaySpecials/holidaySpecialsjs/changeText.js"></script>
    <script src="../HolidaySpecials/holidaySpecialsjs/underlineHover.js"></script>
    <script src="../HolidaySpecials/holidaySpecialsjs/typingText.js"></script> 
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
        

    <script>
  // Jquery event 
        $(document).ready(function() {
        $("#women").mouseover(function() {
        alert("These products are coming soon!");
        });
        });




 $(document).ready(function(){
      // show img ne fillim
      $("#fade").show();

      //fade in and fade out 
      function fadeInOutImage() {
        $("#fade").fadeOut(10000, function(){
          // Fade in after 2 seconds
          $(this).delay(200).fadeIn(1000, fadeInOutImage);
        });
      }

      // loop
      fadeInOutImage();
    });



        let popupp = document.getElementById("popupp");

        function openPopupp(){
          popupp.classList.add("open-popupp");
        }
        function closePopupp(){
          popupp.classList.remove("open-popupp");
        }


        const productDetailsArray = [


" Helmet in Black - Balenciaga\n   - Color Options: Black/White, White/Black \n   - Upper Material:  50% polystyrene and synthetic materials\n   - Midsole: Double D-ring retention system closure\n  - Outsole: ABS layer and EPS internal padding\n - Best For: Helmet for alpine skiing and snowboarding\n      - Special Feauture: 3B Sports Icon artwork printed on each side",

" Nappa Leather Jacket 'Prada'\n   - Color Options: Black/White, Black/Metallic Silver\n   - Upper Material: Premium lambskin leather for a luxurious and supple feel.\n   - Midsole: Front zip closure with a branded Prada zipper for a sleek look.\n   - Outsole: Smooth satin lining for comfort and ease of wearing.\n   - Best For: Biking and everyday use.\n   - Special Feature: Unique quilted pattern on the shoulders and elbows for added texture and visual interest.",

" Carrying Bag for Dogs 'Hermes'\n   - Color Options: Brown/Blue, Black/Blue \n   - Upper Material: Durable and water-resistant nylon fabric for lasting quality.\n   - Midsole: Secure zippered closure to keep your pet safe and contained.\n   - Outsole: Adjustable shoulder strap for convenient transportation.\n   - Best For: Carrying Dogs.\n   - Special Feature: Limited edition release inspired by summer BBQ vibes, adding a touch of style to your pet's accessories.",

" Ski Sneaker - Balenciaga\n   - Color Options: Black/Chains, Black/Black\n   - Upper Material: High-quality synthetic and textile upper for durability.\n   - Midsole: Unique ski sneaker design inspired by winter sports.\n   - Outsole: Padded collar and tongue for added comfort during wear.\n   - Best For: Skiing and Hiking\n   - Special Feature: Iconic added chains.",

" N°5 - Chanel\n   - Color Options: Orange/White, Pink/White\n   - Upper Material: Glass Cap\n   - Midsole: Filled with vanilla and floral scents\n   - Outsole: Normal glass \n   - Best For: Everyday use and special occasions\n   - Special Feature: Classy floral and vanilla scent.",

" Vertical Bag - Hermes\n   - Color Options: Black/Blue, Black/White\n   - Upper Material: True leather\n   - Midsole: Full leather with bands for extra design\n   - Outsole: Extra layers of zips.\n   - Best For: Picnics and weekend travel.\n   - Special Feature: Travel and vacate in class.",

" Paris Loafers - Hermes\n   - Color Options: Blue/White, Blue/Black\n   - Upper Material: Luxurious full-grain leather upper for a refined and sophisticated appearance.\n   - Midsole: Classic loafer design with a modern and elegant silhouette.\n   - Outsole: Cushioned insole for all-day comfort during casual wear.\n   - Best For: Perfect for both casual wear and occasions where a touch of sophistication is desired.\n   - Special Feature: Indulge in artisanal luxury with the handcrafted elegance of Hermes' Paris Loafers."
];

initializeProductDetails(productDetailsArray)
      
  // $('#header').load('/MainFiles/HeaderFooter/header.html');




     
    </script>
<script src="../HeaderFooter/footerStyle.js"></script>





</body>
</html>