<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../HeaderFooter/header.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../KidsPage/kidsShoes.css" rel="stylesheet">
    <link href="../KidsPage/checkout.css" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">
    <title>Kids Shoes</title>
</head>
<body class="finalStep">

<div id="header"></div>

<div class="container-fluid">
    <div class="row">
        <?php
        include '../signUp/DatabaseUtil.php'; 

        try {
            $db = DatabaseUtil::getConnection();
            $query = "SELECT Name, Price, Image_URL, Description FROM Kids_Shoes";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $shoes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($shoes as $shoe) {
                echo '<div class="col-md-4">';
                echo '<a class="linkToBuy" onclick="openPopup()">';
                echo '<img alt="' . htmlspecialchars($shoe['Name']) . '" class="firstImage" src="../../' . htmlspecialchars($shoe['Image_URL']) . '">';
                echo '<p class="firstParagraph">' . htmlspecialchars($shoe['Name']) . '</p>';
                echo '<p class="qmimi">' . htmlspecialchars($shoe['Price']) . '$</p>';
                echo '<p class="goToProduct">Go To Product</p>';
                echo '</a></div>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</div>

<div id="footer"></div>

<div class="container">
    <div class="popup" id="popup">
        <img class="productImage" src="../../KidsImages/imageedit_1_3949189767.png">
        <button type="button" class="closePopupButton" onclick="closePopup()">X</button>
        <form class="formDetails" id="formDetails">
            <div class="allInfo">
                <p class="productName">AAA</p>
                <p class="ref">XYZ</p>
                <p class="productPrice">100</p>
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
                <input class="submitButton" type="submit" value="Click & Collect">
                <button type="button" class="productDetails btn-demo" data-toggle="modal" data-target="#myModal2">Product Details</button>
            </div>
        </form>
    </div>
</div>

<div class="container demo">
    <div class="text-center"></div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <ul class="productInfo" style="list-style-type: none;">
                        <li><h3 class="productDetailsHeading productElemnt">Product Details</h3></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
<script src="../KidsPage/script.js"></script>
<script src="../HeaderFooter/footerStyle.js"></script>
<script>
    const productDetailsArray = [
        " Air Jordan 3 Retro\n   - Color Options: Black/Cement Grey, White/Fire Red\n   - Upper Material: Premium leather and synthetic materials\n   - Midsole: Visible Air-Sole unit for responsive cushioning\n   - Outsole: Solid rubber with circular traction pattern\n   - Best For: Basketball and casual wear\n   - Special Feature: First introduced in 1988, designed by Tinker Hatfield.",
        " LeBron XXI SE 'Movie Night'\n   - Color Options: Purple/Gold, Black/Metallic Silver\n   - Upper Material: KnitPosite construction for lightweight support\n   - Midsole: Full-length Zoom Air unit for maximum impact protection\n   - Outsole: Translucent rubber with traction pods\n   - Best For: Basketball and lifestyle\n   - Special Feature: Inspired by LeBron James' passion for movies and entertainment.",
        " Air Jordan 3 Retro\n   - Color Options: Black/Cement Grey, White/Fire Red\n   - Upper Material: Premium leather and synthetic materials\n   - Midsole: Visible Air-Sole unit for responsive cushioning\n   - Outsole: Solid rubber with circular traction pattern\n   - Best For: Basketball and casual wear\n   - Special Feature: First introduced in 1988, designed by Tinker Hatfield.",
        " LeBron XXI SE 'Movie Night'\n   - Color Options: Purple/Gold, Black/Metallic Silver\n   - Upper Material: KnitPosite construction for lightweight support\n   - Midsole: Full-length Zoom Air unit for maximum impact protection\n   - Outsole: Translucent rubber with traction pods\n   - Best For: Basketball and lifestyle\n   - Special Feature: Inspired by LeBron James' passion for movies and entertainment.",
        " Air Jordan 3 Retro\n   - Color Options: Black/Cement Grey, White/Fire Red\n   - Upper Material: Premium leather and synthetic materials\n   - Midsole: Visible Air-Sole unit for responsive cushioning\n   - Outsole: Solid rubber with circular traction pattern\n   - Best For: Basketball and casual wear\n   - Special Feature: First introduced in 1988, designed by Tinker Hatfield.",
        " LeBron XXI SE 'Movie Night'\n   - Color Options: Purple/Gold, Black/Metallic Silver\n   - Upper Material: KnitPosite construction for lightweight support\n   - Midsole: Full-length Zoom Air unit for maximum impact protection\n   - Outsole: Translucent rubber with traction pods\n   - Best For: Basketball and lifestyle\n   - Special Feature: Inspired by LeBron James' passion for movies and entertainment.",
        " Air Jordan 3 Retro\n   - Color Options: Black/Cement Grey, White/Fire Red\n   - Upper Material: Premium leather and synthetic materials\n   - Midsole: Visible Air-Sole unit for responsive cushioning\n   - Outsole: Solid rubber with circular traction pattern\n   - Best For: Basketball and casual wear\n   - Special Feature: First introduced in 1988, designed by Tinker Hatfield.",
        " LeBron XXI SE 'Movie Night'\n   - Color Options: Purple/Gold, Black/Metallic Silver\n   - Upper Material: KnitPosite construction for lightweight support\n   - Midsole: Full-length Zoom Air unit for maximum impact protection\n   - Outsole: Translucent rubber with traction pods\n   - Best For: Basketball and lifestyle\n   - Special Feature: Inspired by LeBron James' passion for movies and entertainment.",
        " Air Jordan 3 Retro\n   - Color Options: Black/Cement Grey, White/Fire Red\n   - Upper Material: Premium leather and synthetic materials\n   - Midsole: Visible Air-Sole unit for responsive cushioning\n   - Outsole: Solid rubber with circular traction pattern\n   - Best For: Basketball and casual wear\n   - Special Feature: First introduced in 1988, designed by Tinker Hatfield.",
        " LeBron XXI SE 'Movie Night'\n   - Color Options: Purple/Gold, Black/Metallic Silver\n   - Upper Material: KnitPosite construction for lightweight support\n   - Midsole: Full-length Zoom Air unit for maximum impact protection\n   - Outsole: Translucent rubber with traction pods\n   - Best For: Basketball and lifestyle\n   - Special Feature: Inspired by LeBron James' passion for movies and entertainment.",
    ];


    initializeProductDetails(productDetailsArray);

    $('#footer').load('../HeaderFooter/footer.html');
</script>
</body>
</html>
