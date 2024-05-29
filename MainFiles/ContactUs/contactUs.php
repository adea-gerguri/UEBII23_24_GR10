<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../HeaderFooter/header.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../ContactUs/contactus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../KidsPage/kidsShoes.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../KidsPage/checkout.css" rel="stylesheet"> 
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <title>Contact Us</title>
</head>

<body>
    <div id="header"></div>
    <div class="informationAboutUs">
        <h1 class="firstParagraph">Get in touch with our creator-friendly<br>    support team</h1>
        <p class="secondParagraph">Our business hours are 9AM-6PM ET Monday-Friday and 9AM-5PM ET on weekends.</p>
    </div>

    <div class="emailCard">
        <p>Send us an email and we'll get<br> back to you soon</p>
        <div class="container">

    <form id="contact" action="sendEmail.php" method="post">
      <fieldset><input placeholder="Your name" name="name" type="text" tabindex="1" autofocus></fieldset>
      <br>
      <fieldset><input placeholder="Your Email Address" name="email" type="email" tabindex="2"></fieldset>
      <br>
      <fieldset><input placeholder="Type your subject line" type="text" name="subject" tabindex="4"></fieldset>
      <br>
      <fieldset><textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea></fieldset>
      <br>
      <fieldset><button type="submit" name="send" id="contact-submit">Submit Now</button></fieldset>
    </form>

    
  </div>
    </div>
<br><br>
    <h1 class="talkToTeam">Talk to Our Team</h1>
    <p style="text-align: center; margin-top: 70px;" class="ref"></p>

<?php
$people = array(
    "Courtney" => "../../contactUsImages/Courtney.jpg",
    "Katee" => "../../contactUsImages/Katee.jpg",
    "Arraya" => "../../contactUsImages/Arraya.jpeg",
    "Brittanys" => "../../contactUsImages/Brittanys.png"
);
ksort($people);
?>
<div>
    <?php foreach ($people as $name => $image) { ?>
        <img class="peopleImages" src="<?php echo $image; ?>">
    <?php } ?>
</div>
<div>
    <?php foreach ($people as $name => $image) { ?>
        <p class="peopleNames"><?php echo $name; ?></p>
    <?php } ?>
</div>

<!-- 


    
    <div class="fnd">
        <div class="fndi">
        <h2 style="font-family: 'Montserrat', sans-serif;" class="ff">Help</h2>
            <a href="#" class="help">Our Client Services are available<br> for call
                from 9 AM to 6 PM <br> Monday to Thursday.</a>
            <a href="#" class="help">Email Services are available 24/7</a>
            <a href="#" class="help">CONTACT US: 0800100</a>
            <br>
            <a href="#" class="help">EMAIL: support@rhae.com</a>
            <br>
            <a href="#" class="help">Stores</a>
        
        </div>
        <div  class="fndi">
            <h2 style="font-family: 'Montserrat', sans-serif;" class="ff">About Us & Partners    </h2>
            <a href="#" class="about">Louis Vuitton    </a><br>
            <a href="#" class="about">Chanel    </a><br>
            <a href="#" class="about">Dior    </a><br>
            <a href="#" class="about">Hermes</a><br>
            <a href="#" class="about">Nike    </a><br>
            <a href="#" class="about">Prada</a><br>
            <a href="#" class="about">Balenciaga</a><br>
            <h1 style="color:white; text-align: center;
            font-family: 'Montserrat', sans-serif;">RHAE</h1>
            </div>
            <div class="fndi">
                <h2 style="font-family: 'Montserrat', sans-serif;" class="ff">Email Sign-Up  </h2>
               <p class="entireParagraph"><a style="font-family: 'Montserrat', sans-serif;" class="sign" href="#">Sign up</a> for RHAE emails and receive the<br> latest news from La Maison, including<br> exclusive online  pre-launches<br> and new collections.</p>
                </div>
        </div> -->
        <div id="footer"></div>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

        <script>
            $('#footer').load('/MainFiles/HeaderFooter/footer.html');    
            $('#header').load('/MainFiles/HeaderFooter/header.html');

        </script>
        <script src="/MainFiles/HeaderFooter/footerStyle.js"></script>
</body>
</html>