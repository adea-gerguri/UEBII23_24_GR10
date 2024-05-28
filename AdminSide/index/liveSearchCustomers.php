<?php
    // echo "<script>console.log(\"ghetto geasy\");</script>";
    try {
        // $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
        // $pdo = new PDO($dsn, $username, $password);
        $con = mysqli_connect($host, $username, $password, $dbname, $port);          
        // var_dump($con);
        echo "<tr>";
        echo "<tr><td class='tableDataId' colspan=\"4\">test  statik 1</td></tr>";
        echo "</tr> <br>";
        
        if(isset($_POST["searchTerm"])){
            echo "<tr><td class='tableDataId' colspan=\"4\">test  statik 123</td></tr>";

            $input = $_POST["searchTerm"];
            $sql = "SELECT id, firstName, lastName, gender, email FROM Users WHERE firstName LIKE \"%{$input}%\" or lastName like \"%{$input}%\"";
        } else {
            echo "<tr><td class='tableDataId' colspan=\"4\">test  statik 321</td></tr>";
            $sql = "SELECT id, firstName, lastName, gender, email FROM Users"; # qe me ta load para se me bo submit
        }
        $resultSet = mysqli_query($con, $sql);
        if(mysqli_num_rows($resultSet) > 0) {
            while ($row = mysqli_fetch_assoc($resultSet)){
                echo "<tr>";
                echo "<td class='tableDataId'>" . $row["id"] . "</td>";
                echo "<td>" . $row["firstName"] . " " .  $row["lastName"] . "</td>";
                # echo "<td>" . $row["lastName"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        }

        // $stmt = $pdo->query($sql);
        // $stmt->execute();
        // $rezultati = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // # var_dump($stmt);
        // # echo "<br><br><br><br><br>";
        // # var_dump($rezultati);
        // if ($rezultati) {
        //     foreach($rezultati as $row) {
        //         echo "<tr>";
        //         echo "<td class='tableDataId'>" . $row["id"] . "</td>";
        //         echo "<td>" . $row["firstName"] . " " .  $row["lastName"] . "</td>";
        //         # echo "<td>" . $row["lastName"] . "</td>";
        //         echo "<td>" . $row["gender"] . "</td>";
        //         echo "<td>" . $row["email"] . "</td>";
        //         echo "</tr>";
        //     }
        // } else {
        //     echo "<tr colspan=\"5\">WE GOT NO CLIENTS</tr>";
        // }
    } catch (Exception $e) {
        echo "<tr colspan=\"4\"><td>Error 404; No Database Connection</td></tr>";
    }
?>