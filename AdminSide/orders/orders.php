<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Products</title>
    <!-- Include any necessary CSS stylesheets or libraries here -->
    <style>
        table thead th, table tr td{
            border: 1px groove;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<div class="navbar">
    <a href="#">Dashboard</a>
    <a href="#">Orders</a>
    <a href="#">Customers</a>
    <a href="#">Settings</a>
    <!-- Add other navigation links as needed -->
</div>

<!-- Main Content -->
<div class="content">
    <h2>Products</h2>
    <a href="add_product.php">Add Product</a> <!-- Link to add a new product -->

    <!-- Table to display products -->
    <table>
        <thead>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Customer Full Name</th>
            <th>Order Address</th>
            <th>Payment Method</th>
            <th>Price</th>
        </thead>
        <?php
        // Include database connection code
        include 'db_connection.php';

        // Fetch products from database
        $query = "SELECT * FROM products";
        $result = $pdo->query($query);

        // Loop through each product and display it in a row
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>$" . $row['price'] . "</td>";
            echo "<td><a href='edit_product.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_product.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
