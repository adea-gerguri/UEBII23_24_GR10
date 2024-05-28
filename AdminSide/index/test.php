<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAE Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <?php 
        include '../dbConn/init.php';
        include "../dbConn/objects.php";
        define("self_path", $_SERVER["PHP_SELF"]);
    ?>

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2 onclick='location.reload()'>RHAE <br> Admin Dashboard</h2>
            <ul>
                <li><a href="#dashboard" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#products"><i class="fas fa-box"></i> Products</a></li>
                <li><a href="#orders"><i class="fas fa-shopping-cart"></i> Orders</a></li>
                <li><a href="#customers"><i class="fas fa-users"></i> Customers</a></li>
                <li><a href="#settings"><i class="fas fa-cogs"></i> Settings</a></li>
                <li><a href="#email" onclick="loadNewContent('./emailSend.php', 'main-content')"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a></li>
            </ul>
        </div>
        <div class="main-content" id="main-content">
            <div id="dashboard">
                <h2>Dashboard</h2>
                <div class="cards">
                    <div class="card">
                        <h3>Total Sales</h3>
                        <p>
                        <?php 
                            try {
                                # echo"<script> console.log(\"test\") </script>";
                                # $conn = new mysqli($servername, $username, $password, $database, $port); # qitu osht errori
                                $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
                                $pdo = new PDO($dsn, $username, $password);
                                # echo"<script> console.log('U lidhem me databaze per cmimiTotal.')</script>";
                                
                                # sql ngjashem si me java
                                $sql = "select sum(price) as cmimiTotal from Men_Shoes;"; # qito me : perpara jon placeholders, sikur me jep vlera permes references n c++
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
                                echo"<script>console.log(\"Gabim ne [index.php] gjate lidhjes me Databaze: " . $e->getMessage() . "\") </script>";
                                echo "Error 404; No Database Connection";
                            }
                        ?>
                        </p>
                    </div>
                    <div class="card">
                        <h3>New Orders</h3>
                        <p>
                            <?php
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
                        <h3>New Customers</h3>
                        <p>
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
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div id="products">
                <h2>Featured Products</h2>
                <button class="add-btn" onclick="openModal('productModal')">Add Product</button>
                <button class="add-btn" onclick="loadNewContent('./AllProducts.php', 'main-content')">Product Catalog</button>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Occasion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        try {
                            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
                            $pdo = new PDO($dsn, $username, $password);
                            $sql = "SELECT Special_ID, Name, Price, count(Special_ID) AS Count, Holiday_Name FROM Holiday_Specials GROUP BY Special_ID ";                                
                            $stmt = $pdo->query($sql);
                            // echo"ckemi :)";
                            $stmt->execute();
                            $rezultati = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            // var_dump($stmt);
                            # echo "<br><br><br><br><br>";
                            // var_dump($rezultati);
                            if ($rezultati) {
                                foreach($rezultati as $row) {
                                    echo "<tr>";
                                    echo "<td class='tableDataId'>" . $row["Special_ID"] . "</td>";
                                    echo "<td>" . $row["Name"] . "</td>";
                                    echo "<td>" . $row["Price"] . "</td>";
                                    echo "<td>" . $row["Count"] . "</td>";
                                    echo "<td>" . $row["Holiday_Name"] . "</td>";
                                    echo "</tr>";
                                }

                            } else {
                                echo "<tr><td>WE GOT NO CLIENTS</td></tr>";
                            }
                        } catch (Exception $e) {
                            echo "<tr colspan=\"5\">Error 404; No Database Connection</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="orders">
                <h2>Recent Orders</h2>
                <button class="add-btn" onclick="console.log('u prek view all orders')">View All Orders</button>

                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Orders data will go here -->
                    </tbody>
                </table>
            </div>

            <!-- customer form -->
            <div id="customers">
                <h2>Customers</h2>
                <form action="<?= self_path ?>" method="post" id="customerForm">
                    <input type="text" name="searchTerm" id="searchTerm" name="searchTerm" placeholder='Name...'>
                    <!-- submitoje -->
                    <button onclick="submitForm()" style="background-color: NULL;">
                    <i class="fa fa-search" aria-hidden="true"></i> Search
                    </button>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            try {
                                $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
                                $pdo = new PDO($dsn, $username, $password);
                                $searchTerm = $_POST["searchTerm"];
                                if(isset($searchTerm)){
                                    $sql = "SELECT id, firstName, lastName, gender, email FROM Users WHERE firstName LIKE \"%{$searchTerm}%\" or lastName like \"%{$searchTerm}%\"";
                                } else {
                                    $sql = "SELECT id, firstName, lastName, gender, email FROM Users"; # qe me ta load para se me bo submit
                                }
                                $stmt = $pdo->query($sql);
                                $stmt->execute();
                                $rezultati = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                # var_dump($stmt);
                                # echo "<br><br><br><br><br>";
                                # var_dump($rezultati);
                                if ($rezultati) {
                                    foreach($rezultati as $row) {
                                        echo "<tr>";
                                        echo "<td class='tableDataId'>" . $row["id"] . "</td>";
                                        echo "<td>" . $row["firstName"] . " " .  $row["lastName"] . "</td>";
                                        # echo "<td>" . $row["lastName"] . "</td>";
                                        echo "<td>" . $row["gender"] . "</td>";
                                        echo "<td>" . $row["email"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr colspan=\"5\">WE GOT NO CLIENTS</tr>";
                                }
                            } catch (Exception $e) {
                                echo "<tr colspan=\"5\">Error 404; No Database Connection</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="settings">
                <h2>Settings</h2>
                <!-- Settings content will go here -->
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('productModal')">&times;</span>
            <h2>Add Product</h2>
            <form id="productForm">
                <label for="productName">Name:</label>
                <input type="text" id="productName" name="productName" required> <br>
                <label for="productPrice">Price:</label>
                <input type="number" id="productPrice" name="productPrice" required> <br>
                <label for="productStock">Stock:</label>
                <input type="number" id="productStock" name="productStock" required> <br>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('customerForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Create a new FormData object
                var formData = new FormData(form);

                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();

                // Configure it: POST-request to the URL /submit
                xhr.open('POST', '', true);

                // Set up a function to handle the response
                // xhr.onreadystatechange = function() {
                //     if (xhr.readyState === 4) { // 4 means the request is done
                //         if (xhr.status === 200) { // 200 means a successful return
                //             document.getElementById('result').innerHTML = xhr.responseText; // Show the result
                //         } else {
                //             console.error('An error occurred during the transaction');
                //         }
                //     }
                // };

                // Send the request with the form data
                xhr.send(formData);
            });
        });

    </script>

</body>
</html>
