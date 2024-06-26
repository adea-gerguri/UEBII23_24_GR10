<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../HeaderFooter/header.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawsome.com.com/releases/v5.10.0/css/all.css">
    <link href="/MainFiles/HeaderFooter/footerStyle.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="../KidsPage/checkout.css" rel="stylesheet">

    <link rel="stylesheet" href="../AboutUs/Aboutus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100&display=swap" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">

    <title>About Us</title>

    
    <script>
      var c = document.getElementById("grafiku");
      var ctx = c.getContext("2d");
      ctx.moveTo(0, 150);
      ctx.lineTo(400, -50);
      ctx.stroke();
      </script>
    <style>
        svg{
            display: block;
    margin: auto;
        }
      table{
      margin-left:100px;
    }
    </style>
    
    </head>
<body>
    
    <div id="header"></div>

  <div class="title">
    <h1 style="text-align: center;">About Us</h1>       
  </div>
  
  <br><br>
  <div class="container" >
    <div class="row">
        <div class="col-md-6"  >
            
            <div class="content" >
                <div class="article" >
                  <p>Welcome to Rhae – your gateway to the world of opulence and style. At Rhae, we curate an exclusive collection of fashion from the most iconic names in the industry. Immerse yourself in luxury with products carefully selected from renowned brands such as Louis Vuitton, Prada, Nike, Chanel, Hermes, Dior, and Balenciaga.</p>
                  Our commitment goes beyond fashion; it's a lifestyle. We strive to bring you the epitome of elegance and sophistication, offering a meticulously chosen array of items that reflect the pinnacle of craftsmanship and design.</p>
                  Join us on a journey where every piece tells a story, and every purchase is a statement. Discover the essence of luxury with Rhae Fashion.</p>
                    <div class="button" >
                        <a href="../ContactUs/contactUs.html" target="_parent">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image-section">
                <img src="../AboutUs/aboutUsIMG/co_founder_cto.jpg" alt="Ceo and Founder">
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6">
            <img src="../AboutUs/aboutUsIMG/ceo_founder.jpg" alt="Founder">
        </div>
        <div class="col-md-6">
            <p style="text-align: justify;">
                <strong>Artan Çitaku: Visionary Founder of Rhae</strong>
                Artan Çitaku's journey into the realm of fashion is a testament to his unwavering passion and dedication to transforming the industry. 
                Rhae, the brainchild of Artan Çitaku, stands as a beacon of creativity and sophistication in haute couture. The brand's ethos revolves
                around a commitment to authenticity, pushing the boundaries of conventional design and making a profound impact on the fashion landscape.
                Artan's keen eye for detail, coupled with his ability to anticipate and shape trends, has propelled Rhae to the forefront of the industry.</p>
                <button class="button" id="slideButton">Show more</button>
                <br>
                <br>
                <p id="slideParagraph">Rhae, 
                has become synonymous with style and luxury, symbolizing not just a brand, but a lifestyle that embodies 
                elegance, innovation, and a commitment to a better future.</p>
            </p>
        </div>
    </div>
</div>
      
    
      
  </div>
  <br>
  <br>
  <div style="margin-right: 100px;">
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th style="background-color:#5585b5; padding: 10px;">Board Role</th>
                <th style="background-color:#53a8b6; padding: 20px;">Full Name</th>
                <th style="background-color: #79c2d0; padding: 20px; ">Education</th>
                <th style="background-color: #bbe4e9; padding: 20px;">Years of Experience</th>
    
            </tr>
        </thead>
          <tbody>      
<?php
$boardMembers = array(
    array("Board Role" => "Founder", "Full Name" => "Artan Çitaku", "Education" => "MSC in Fashion Designing", "Years of Experience" => 20),
    array("Board Role" => "CEO", "Full Name" => "Artë Çitaku", "Education" => "Industrial Engineering", "Years of Experience" => 5),
    array("Board Role" => "CTO", "Full Name" => "Kim Ji-hye", "Education" => "Computer Science", "Years of Experience" => 3),
    array("Board Role" => "CFO", "Full Name" => "Mike Yu", "Education" => "BA in Finance", "Years of Experience" => 4),
    array("Board Role" => "CFO", "Full Name" => "Ëmbla Raça", "Education" => "BA in Management", "Years of Experience" => 2)
);
$experiences = array();
foreach ($boardMembers as $key => $row) {
    $experiences[$key] = $row['Years of Experience'];
}
sort($experiences);
$sortedBoardMembers = array();
foreach ($experiences as $experience) {
    foreach ($boardMembers as $member) {
        if ($member['Years of Experience'] == $experience) {
            $sortedBoardMembers[] = $member;
        }
    }
}
foreach ($sortedBoardMembers as $member) {
    echo "<tr>";
    echo "<td>" . $member['Board Role'] . "</td>";
    echo "<td>" . $member['Full Name'] . "</td>";
    echo "<td>" . $member['Education'] . "</td>";
    echo "<td>" . $member['Years of Experience'] . "</td>";
    echo "</tr>";
}
?>
    </tbody>
    </table>
    
  </div>
  
  
  
<div><p style="overflow: hidden; width: 100%;" class="BorderThis" ></p></div>
<br><br><br>
<div style="margin-left: 100px;margin-right: 100px; text-align: justify;">
<p  >Meet Miguel Conde, a visionary and emerging talent in the fashion industry, currently making waves as a dedicated fashion intern at Rhae. Born with a natural flair for aesthetics, Miguel's journey into the world of fashion began at a young age.</p>
                        <p>With an academic background in Fashion Design from a prestigious institute, Miguel joined Rhae with a hunger to explore the nuances of haute couture and contemporary fashion. His unique perspective and ability to infuse creativity into every project have quickly set him apart.</p>
                        <p>Miguel's internship at Rhae is not just a professional experience; it's a journey of self-discovery and growth. His commitment to staying on the pulse of the latest trends, combined with a dedication to mastering the technical aspects of design, makes him an invaluable member of our team.</p>
                        <p>Outside of the studio, Miguel is known for his passion for sustainable and ethical fashion. His advocacy for responsible practices aligns seamlessly with Rhae's commitment to making a positive impact on the industry.</p>
</div>                
<br><br><br>
<div class="row">
<div id="video-container"></div>
<video autoplay muted loop>
  <source src="../AboutUs/aboutUsIMG/aboutUs.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>
<br>

<h1 style="display: flex;justify-content: center;" id="colorChangeTrigger">RHAE Company</h1>
<table>
  <tr>
      <td style="padding: 10px; margin-left: 20px;">
          <div class="row">
              <div class="col-md-12">
                  <br>
                  <ul class="main-list">
                      <li id="item1">Immerse yourself in opulence and style with RHAE.</li>
                      <li id="item2">Curating an exclusive collection of fashion from iconic names.</li>
                      <li>Elevate your wardrobe with products carefully selected from renowned brands such as:
                          <ul class="sub-list">
                              <div class="row">
                              <div class="col-md-3">
                            <?php
                            echo "<br>";
                            $brands = array(
                                "Louis Vuitton",
                                "PRADA",
                                "Nike",
                                "Chanel"
                            );
                            rsort($brands);
                            foreach ($brands as $brand) {
                                echo "<li>" . $brand . "</li>";
                            }
                            ?>
                        </div>
                        <div class="col-md-3">
                            <?php
                            echo "<br>";
                            $other_brands = array(
                                "Hermes",
                                "Dior",
                                "Balenciaga"
                            );
                            rsort($other_brands);
                            foreach ($other_brands as $brand) {
                                echo "<li>" . $brand . "</li>";
                            }
                            ?>
                        </div>

                                  </div>
                              </div>
                          </ul>
                      </li>
                        <ul>
                        <?php
                        $brands = array(
                            "Louis Vuitton" => "An emblem of timeless elegance and craftsmanship.",
                            "Prada" => "Redefining contemporary fashion with innovation and style.",
                            "Nike" => "Unleash the power of sportswear with cutting-edge design.",
                            "Chanel" => "A symbol of timeless sophistication and iconic fashion.",
                            "Hermes" => "Luxurious craftsmanship and the art of living with finesse.",
                            "Dior" => "Fusion of classic and modern, embodying haute couture.",
                            "Balenciaga" => "Pushing boundaries with avant-garde fashion and design."
                        );
                        krsort($brands);
                        foreach ($brands as $brand => $description) {
                            echo "<li>$brand - $description</li>";
                        }
                        ?>
                        </ul>
                  </ul>
              </div>
          </div>
      </td>

      <td style="padding: 10px; margin-left: 20px;">
          <h3>Perfect sales through November</h3>
          <p>This graph represents the sales through November; every product shipped was sold!</p>
          <canvas id="grafiku" class="graph-canvas" style="border:1px solid #000000;">The browser does not support canvas</canvas>
      </td>
  </tr>
</table>

<h5 >For suggestions and more write us:</h5>
<br>
<div class="form">
<form action="mailto:addea.gerguri@gmail.com" method="post" enctype="text/plain">
  <label for="email">Your Email:</label>
  <input type="email" id="email" name="email" required><br>

  <label for="message">Message:</label><br>
  <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

  <input class="btn primary-btn" type="submit" value="Send Email">
</form>
</div>

<div id="footer"></div>



<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script>
    $('#footer').load('../HeaderFooter/footer.html');
    //$('#header').load('/MainFiles/HeaderFooter/header.html');

  </script>
  <script src="../HeaderFooter/footerStyle.js"></script>

  <script>
    //canvas dizajni i grafikut
    var c = document.getElementById("grafiku");
    var ctx = c.getContext("2d");
    ctx.moveTo(0, 150);
    ctx.lineTo(400, -50);
    ctx.stroke();
  </script>
  <script src="../AboutUs/aboutus.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->  
</body>
</html>