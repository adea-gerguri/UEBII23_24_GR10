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
                            <th>Action</th>
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
                                echo "<tr colspan=\"5\">WE GOT NO CLIENTS</tr>";
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
            <div id="customers">
                <h2>Customers</h2>
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
                                $sql = "SELECT * FROM Users WHERE firstName LIKE \"%{$searchTerm}%\" or lastName like \"%{$searchTerm}%\"";
                            } else {
                                $sql = "SELECT id, firstName, lastName, gender, email FROM Users";
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