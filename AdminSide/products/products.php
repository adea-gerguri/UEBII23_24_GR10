<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAE Products</title>
    <link rel="stylesheet" href="../index/index-style.css">
    <!-------------------------------------------------------->
    <style>
        /* div{
            height: fit-content;
        } */
    </style>
</head>
<body>
    <?php
        include "../HeaderFooter/header/header.php";
        include '../dbConn/init.php';
        #include 'productEdit.php';
        #phpinfo();
        try{
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            #echo "$dsn";
            $pdo = new PDO($dsn,$username,$password);
            $query = 'SELECT img_url as productImage, productName, price as productPrice FROM products;'; # >>> Duhet me bo qe mu rujt prej SQL injection
            $statement = $pdo->query($query);
            $statement->execute();
            $rezultati = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo"<main>";
            foreach($rezultati as $produkti){ # foreach($pdo->query($query) as $product){ 
                echo"<div style='width: 50%;height:fit-content; margin-left: 25%; margin-top: 3%;background-color: #eee;'><div style='float: right;'><img src='{$produkti['productImage']}' height='400px'></div><p class='maks'> <span style='margin-left: 10%'>{$produkti['productName']}</span> <span style='float: right;margin-right:10%;'>\${$produkti['productPrice']}</span></p></div>";
                //echo"<pre>";
                //var_dump($product);
                //echo"</pre>";
            }
            echo '</main>';
            #echo"u kry conni";    
        } catch(Exception $e) {
            echo "<div style='display: flex; justify-content: center; align-items: center; height: 100vh;'><h1>rezultatiin the database</h1></div>";
            echo"<script>console.log(\"Gabim gjate lidhjes me Databaze: " . $e->getMessage() . "\") </script>";
        }
    ?>
</body>
</html>