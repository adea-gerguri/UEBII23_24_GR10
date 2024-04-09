<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RHAE Admin Dashboard</title>
        <link rel="stylesheet" href="index-style.css">  
    </head>

    <body>
        <header class="header">
            <div class="logo, navigation">
                <a href="../index/index.php"><h1>RHAE</h1></a>
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="../index/index.php">Home</a></li>
                    <li><a href="../products/products.php">Products</a></li>
                    <li><a href="../orders/orders.php">Orders</a></li>
                    <li><a href="../customers/customers.php">Customers</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <section class="overview">
                <h2>Overview</h2>
                <div class="card">
                    <h3>Total Sales</h3>
                    <p>
                        <!-- si prefix qe neve me na dal veq vlera e numrit mos mu pshtjell me bo me php -->
                        <?php 
                            include '../dbConn/init.php'; // na jep credentials
                            try {
                                # echo"<script> console.log(\"test\") </script>";
                                $conn = new mysqli($servername, $username, $password, $database, $port); # qitu osht errori
                                echo"<script> console.log('U lidhem me databaze.')</script>";
                              
                                # sql ngjashem si me java
                                $sql = "select sum(price) as cmimiTotal from products;"; # qito me : perpara jon placeholders, sikur me jep vlera permes references n c++
                                # ; # -> qikjo osht fiks per databazenn ton, veq e bojna uncomment
                                $stmt = $conn->prepare($sql); # statement
                                $stmt->execute();
                                $rezultati = $stmt->get_result()->fetch_assoc();
                                if($rezultati){
                                    # var_dump($rezultati);
                                    echo "$" . $rezultati['cmimiTotal'];
                                } else {
                                    echo 'Error 404 No Sales';
                                }
                              } catch(Exception $e) {
                                echo "Error 404 No Database";
                                echo"<script>console.log(\"Gabim gjate lidhjes me Databaze: " . $e->getMessage() . "\") </script>";
                              }
                        ?>
                    </p>
                </div>
                <div class="card">
                    <h3>New Orders</h3> <!-- i njejti sen veq me query me interval t dites, maybe me intervval 1 javor -->
                    <p>15</p>
                </div>
                <div class="card">
                    <h3>Low Stock Items</h3> <!-- select count(id) from products where stock < 5 edhe shtine qaty posht-->
                    <p>5</p>
                </div>
            </section>

            <section class="recent-activity">
                <h2>Recent Activity</h2>
                <ul>
                    <li>Order #12345 
                        <?php
                            // qitu vjen ni query
                            // select ID, fName, lName from ORDERS order by desc limit 1;
                            // ruj krejt neper variabla,
                            // echo $id;
                        ?>
                        placed by John Smith
                        <?php
                            // echo $fname . " " . $lName;
                        ?>
                    </li>

                    <li>Product "T-Shirt" 
                        <?php 
                            // gjeje cili produkt u ndrru i fundit
                            // select p.pName, admin.name from products p join audit a join users admin on p.id = a.id and admin.id = a.adminID order by desc limit 1;
                            // ruje qat p.pName me ni variabel $productName edhe a.adminID ne $admini
                            // echo $productName
                        ?>
                        updated by Jane Doe
                        <?php
                            // echo $admini;
                        ?>
                    
                    </li>
                    
                    <li>New customer Sarah Jones registered</li> <!-- i njejti sen qitu shkon -->
                </ul>
            </section>
        </main>

        <footer class="footer">
            <p>&copy; 2024 RHAE Inc.</p>
        </footer>
    </body>
</html>