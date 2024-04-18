<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHAE Admin Dashboard</title>
    <link rel="stylesheet" href="../AdminHeaderFooter/header/headerStyle.css">
    <link rel="stylesheet" href="index-style.css">
</head>

<body style="min-width: 100vh;">
    <?php include "../AdminHeaderFooter/header/header.php" ?>
    <main style="padding: 100px;">
        
        <section class="overview">

            <div>
                <h1>Overview</h1>
            </div>

            <div class="card">
                <h3>Total Sales</h3>
                <p><!-- php script -->/</p>
            </div>

            <div class="card">
                <h3>New Orders</h3>
                <p><!-- php script orders t javes t kalume -->/</p>
            </div>

            <div class="card">
                <h3>Low Stock Items</h3>
                <p><!-- php script per itemat me stock ma pak se 5 -->/</p>
            </div>

        </section>
        <br><br>
        <section class="overview">

            <div>
                <h1>Recent Activity</h1>
            </div>

            <div class="card">
                <h3>Recent Order</h3>
                <p>/ placed by /<!-- php script --></p>
            </div>

            <div class="card">
                <h3>Recent Product</h3>
                <p>/ updated by /<!-- php script orders t javes t kalume --></p>
            </div>

            <div class="card">
                <h3>Newest Customer</h3>
                <p>/<!-- php script per itemat me stock ma pak se 5 -->/</p>
            </div>

        </section>

    </main>
</body>
<footer style="margin-bottom: 0;">
    <span style="display: flex; justify-content: center; align-content: center;">
        &copy; RHAE <?=date("Y")?>
    </span>
</footer>

</html>