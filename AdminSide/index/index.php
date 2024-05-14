<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RHAE Admin Dashboard</title>
        <link rel="stylesheet" href="index-style.css">  
    </head>

    <body>
        
        <?php include "../HeaderFooter/header/header.php"?>    

        <main class="main">
            <section class="overview">
                <h2>Overview</h2>
                <div class="card">
                    <h3>Total Sales</h3>
                    <p>
                        <!-- si prefix qe neve me na dal veq vlera e numrit mos mu pshtjell me bo me php -->
                        <?php 
                            include "../dbConn/objects.php";
                            include '../dbConn/init.php'; // na jep credentials
                            try {
                                # echo"<script> console.log(\"test\") </script>";
                                # $conn = new mysqli($servername, $username, $password, $database, $port); # qitu osht errori
                                $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
                                $pdo = new PDO($dsn, $username, $password);
                                echo"<script> console.log('U lidhem me databaze per cmimiTotal.')</script>";
                                
                                # sql ngjashem si me java
                                $sql = "select sum(price) as cmimiTotal from products;"; # qito me : perpara jon placeholders, sikur me jep vlera permes references n c++
                                # ; # -> qikjo osht fiks per databazenn ton, veq e bojna uncomment
                                $stmt = $pdo->query($sql); # statement
                                $stmt->execute();   #$rezultati = $stmt->get_result()->fetch_assoc();

                                $rezultati = $stmt->fetch(PDO::FETCH_ASSOC); # u perdor vargu i asocium!
                                #echo"<script> console.log('ledri vula')</script>";
                                if($rezultati){
                                    #var_dump($rezultati);
                                    echo "$" . $rezultati["cmimiTotal"];
                                } else {
                                    echo 'Error 404; No Result';
                                }
                              } catch(Exception $e) {
                                echo "Error 404; No Database Connection";
                                echo"<script>console.log(\"Gabim ne [index.php] gjate lidhjes me Databaze: " . $e->getMessage() . "\") </script>";
                              }
                        ?>
                    </p>
                </div>
                <div class="card">
                    <h3>New Orders</h3> <!-- SELECT COUNT(invoiceID) FROM invoice WHERE invoiceDate >= NOW() - INTERVAL 1 MONTH; -->
                    <p>
                        <?php
                            #include "../dbConn/objects.php";   // dmth spasmi nevoj dy her me bo include!!
                            #include '../dbConn/init.php'; // na jep credentials
                            try{
                                $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
                                $pdo = new PDO($dsn, $username, $password);
                                $sql = "SELECT COUNT(ID) AS numriPorosive FROM orders WHERE OrderDate >= CURDATE() - INTERVAL 1 WEEK;";
                                $stmt = $pdo->query($sql);
                                echo"<script>console.log(\"ledri vula\")</script>";
                                $stmt->execute();
                                $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
                                if ($rezultati){
                                    echo $rezultati["numriPorosive"];
                                } else {
                                    echo "No New Orders";
                                }
                            } catch (Exception $e){
                                echo"Error 404; No Database Connection";
                            }
                        ?>
                    </p>
                </div>
                <div class="card">
                    <h3>Low Stock Items</h3> <!-- SELECT COUNT(productID) FROM products WHERE stock < 5; edhe shtine qaty posht-->
                    <p>
                        <?php
                            try{
                                $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
                                $pdo = new PDO($dsn, $username, $password);
                                $sql = "select count(productid) as produktetLowStock from stock where stock <= 5;";
                                $stmt = $pdo->query($sql);
                                $stmt->execute();
                                $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
                                if ($rezultati){
                                    echo $rezultati["produktetLowStock"];
                                } else {
                                    echo "No New Orders";
                                }
                            } catch (Exception $e){
                                echo"Error 404; No Database Connection";
                            }
                        ?>
                    </p>
                </div>
            </section>

            <section class="recent-activity">
                <h2>Recent Activity</h2>
                <ul>
                    <li>Order /
                        <?php
                            // qitu vjen ni query
                            // select ID, fName, lName from orders order by orderDate desc limit 1;
                            // ruj krejt neper variabla,
                            // echo $id;
                        ?>
                        placed by /
                        <?php
                            // echo $fname . " " . $lName;
                        ?>
                    </li>

                    <li>Product /<!--"T-Shirt"-->
                        <?php 
                            // gjeje cili produkt u ndrru i fundit
                            // select p.pName, admin.name from products p join auditChanges ac on p.id = ac.id join users admin on admin.id = ac.adminID order by ac.date desc limit 1;
                            // ruje qat p.pName me ni variabel $productName edhe a.adminID ne $admini
                            // echo $productName
                        ?>
                        updated by /<!--Jane Doe-->
                        <?php
                            // echo $admini;
                        ?>
                    
                    </li>
                    
                    <li>
                        New customer / 
                            <?php 
                                // yuh yuh yuh;
                            ?>
                        registered
                    </li> <!-- i njejti sen qitu shkon -->
                </ul>
            </section>
        </main>

        <?php include "../HeaderFooter/footer/footer.php" ?>
    </body>
</html>