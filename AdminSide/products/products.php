<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAE Products</title>
    <!---->

    <!---->
    <style>
        /*
        main {
            display: grid;
            grid-template-columns:repeat(3,1);
            border: 4px black solid;
        }
        */
    </style>
</head>
<body>
    <?php
        include '../dbConn/init.php';
        #include 'productEdit.php';
        #phpinfo();
        try{
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            #echo "$dsn";
            $pdo = new PDO($dsn,$username,$password);
            echo"<main>";
            $query = 'SELECT productImage, productName, productPrice FROM productszhushi;'; # >>> Duhet me bo qe mu rujt prej SQL injection
            $rezultati = $pdo->query($query)->fetchAll(PDO::FETCH_CLASS, 'Products');
            foreach($rezultati as $produkti){ # foreach($pdo->query($query) as $product){ 
                echo"<div style='width: 300px;'><div><img src='{$produkti->getPid()}' height='400px'></div><p class='maks' id='animated'> {$produkti->getProductName()} {$produkti->getPrice()}</p></div>";
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