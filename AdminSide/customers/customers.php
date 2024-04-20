<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index/index-style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "../HeaderFooter/header/header.php";
    include '../dbConn/init.php';
    include "../dbConn/objects.php";
    define("self_path", $_SERVER["PHP_SELF"]);
    ?>
    <div>
        <form action="<?= self_path ?>" method="post">
            <input type="text" placeholder="Search Users..." name="searchTerm">
            <button type="submit">Search</button>
        </form>
        <table style="border: groove;">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
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
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["firstName"] . "</td>";
                                echo "<td>" . $row["lastName"] . "</td>";
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


                    // forloop per krejt cusomers si tabel me tdal, on click me ti retrieve krejt tdhanat
                    // $sql = "SELECT * FROM table WHERE name LIKE '%" . $searchName . "%';";
                    // qikjo i bjen psh nese e ki emrin GENT munesh me gjet edhe nese e shkrun veq EN psh.
                ?>
            </tbody>
            
            <tfoot>
                lorem
            </tfoot>
        </table>
    </div>
    <?php include "../HeaderFooter/footer/footer.php" ?>
</body>

</html>