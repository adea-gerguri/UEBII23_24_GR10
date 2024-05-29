<?php

    try {

        include "./AdminSide/dbConn/init.php";
        
        $con = mysqli_connect('localhost', 'root', '', 'web2', '3307');              
        
        $input = $_POST["input"];
        $sql = "SELECT id, firstName, lastName, gender, email FROM Users WHERE firstName LIKE \"%{$input}%\" or lastName like \"%{$input}%\"";

        $resultSet = mysqli_query($con, $sql);

        // echo("<tr><td colspan=\"4\">$sql</td></tr>");

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

    } catch (Exception $e) {

        echo "<tr colspan=\"4\"><td>" . $e->getMessage() . "</td></tr>";

    }