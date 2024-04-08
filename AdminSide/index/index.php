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
                        $ <!-- si prefix qe neve me na dal veq vlera e numrit mos mu pshtjell me bo me php -->
                        <?php 
                            include '../dbConn/init.php';
                            try {
                                $conn = new PDO($dsn, $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                echo"<script> alert('U lidhem me databaze.')</script>";
                              
                                # sql ngjashem si me java
                                $sql = "select sum(price) from products;"; # qito me : perpara jon placeholders, sikur me jep vlera permes references n c++
                                # ; # -> qikjo osht fiks per databazenn ton, veq e bojna uncomment
                                $stmt = $conn->prepare($sql); # statement
                                $stmt->execute();
                                $rezultati = $stmt->fetch(PDO::FETCH_ASSOC);
                                echo $rezultati;
                              } catch(PDOException $e) {
                                echo"<script>alert('Gabim gjate lidhjes me Databaze\n>>>".$e->getMessage()."') </script>";
                              }
                        ?>
                    </p>
                </div>
                <div class="card">
                    <h3>New Orders</h3>
                    <p>15</p>
                </div>
                <div class="card">
                    <h3>Low Stock Items</h3>
                    <p>5</p>
                </div>
            </section>

            <section class="recent-activity">
                <h2>Recent Activity</h2>
                <ul>
                    <li>Order #12345 placed by John Smith</li>
                    <li>Product "T-Shirt" updated by Jane Doe</li>
                    <li>New customer Sarah Jones registered</li>
                </ul>
            </section>
        </main>

        <footer class="footer">
            <p>&copy; 2024 RHAE Inc.</p>
        </footer>
    </body>
</html>