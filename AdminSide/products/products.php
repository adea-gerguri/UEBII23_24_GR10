<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAE Products</title>
</head>
<body>
    <?php
        include '../dbConn/init.php';
        #include 'productEdit.php';
        #phpinfo();
        try{
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            echo "$dsn";
            $pdo = new PDO($dsn,$username,$password);
            $query = 'SELECT productImage, productName, productPrice FROM productszhushi;'; # >>> Duhet me bo qe mu rujt prej SQL injection
            foreach($pdo->query($query) as $product){ 
                #echo"<div><div class='imagesss'><img src='{$rezultati['productImage']}' height='400px'></div><p class='maks' id='animated'> {$rezultati['productName']} {$rezultati['productPrice']}</p></div>";
                echo"<div><div class='imagesss'><img src='{$product[0]}' height='400px'></div><p class='maks' id='animated'> {$product[1]} {$product[2]}</p></div>";
                //echo"<pre>";
                //var_dump($product);
                //echo"</pre>";
            }
            echo '</main>';
            #echo"u kry conni";    
        } catch(Exception $e) {
            echo "<div style='display: flex; justify-content: center; align-items: center; height: 100vh;'><h1>Error in the database</h1></div>";
            echo"<script>console.log(\"Gabim gjate lidhjes me Databaze: " . $e->getMessage() . "\") </script>";
        }
    ?>
</body>
</html>