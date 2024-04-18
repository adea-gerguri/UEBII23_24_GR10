<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Store Admin Dashboard</title>
    <link rel="stylesheet" href="./index-style.css">
</head>

<body>
    <header class="header">
        <img src="logo.png" alt="Store Logo">
        <span class="username">Hi, Admin!</span>
        <nav class="navigation">
            <a href="#">Logout</a>
            <a href="#">Settings</a>
        </nav>
    </header>
    <main class="main-content">
        <section class="card-container">
            <div class="card sales-performance">
                <h2>Sales This Month</h2>
                <p><span class="currency">$</span>12,547</p>
                <p class="change">+15% vs Last Month</p>
                <canvas id="salesChart"></canvas>
            </div>
            <div class="card inventory-status">
                <h2>Inventory Overview</h2>
                <p>1,245 Items in Stock</p>
                <p>37 Items Need Restocking</p>
                <canvas id="inventoryChart"></canvas>
            </div>
            <div class="card customer-insights">
                <h2>Active Users</h2>
                <p>872 Users (Past Month)</p>
                <canvas id="userChart"></canvas>
            </div>
            <div class="card quick-actions">
                <h2>Manage Products</h2>
                <button>Add New Product</button>
                <button>Manage Products</button>
                <button>Manage Categories</button>
                <h2>Promotions</h2>
                <button>Manage Discounts</button>
                <button>Create New Promotion</button>
            </div>
        </section>
        <section class="recent-orders">
            <h2>Recent Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#12345</td>
                        <td>John Smith</td>
                        <td>2024-04-18</td>
                        <td>$78.50</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="notifications">
            <h2>Notifications</h2>
            <p>You have 37 items with low stock.</p>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>