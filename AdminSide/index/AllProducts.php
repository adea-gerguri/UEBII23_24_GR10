<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <br> <h4> General </h4>
        <button class="add-btn" onclick=" "> Casual Wear </button>
        <button class="add-btn" onclick=" "> Dresses </button>
        <button class="add-btn" onclick=" "> Holiday Specials </button>
        <br> <h4> Kids </h4>
        <button class="add-btn" onclick=" "> Kids Hoodies </button>
        <button class="add-btn" onclick=" "> Kids Jacket Coats </button>
        <button class="add-btn" onclick=" "> Kids Shoes </button>
        <br> <h4> Men </h4>
        <button class="add-btn" onclick=" "> Men Pants </button>
        <button class="add-btn" onclick=" "> Men Shoes </button>
        <button class="add-btn" onclick=" "> Men Sweaters </button>
        <button class="add-btn" onclick=" "> Men Tshirts </button>
        <hr>
    </div>

</body>
</html>

<?php
try{
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    $sql = "SELECT COUNT(ID) AS newCustomers FROM users WHERE regDate >= CURDATE() - INTERVAL 1 WEEK;";
    $stmt = $pdo->query($sql);
    echo"<script>console.log(\"ledri vula\")</script>";
    $stmt->execute();
    $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rezultati){
        echo $rezultati["newCustomers"];
    } else {
        echo "No New Orders";
    }
} catch (Exception $e){
    echo"Error 404; No Database Connection";
}