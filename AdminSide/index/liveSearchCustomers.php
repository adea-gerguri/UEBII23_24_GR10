<?php

    try {

        include "./AdminSide/dbConn/init.php";
        
        $con = mysqli_connect('localhost', 'root', '', 'web2', '3307');              
        
        if(isset($_POST["input"])){

            $input = $_POST["input"];
            $sql = "SELECT id, firstName, lastName, gender, email FROM Users WHERE firstName LIKE \"%{$input}%\" or lastName like \"%{$input}%\"";

        } else {

            $sql = "SELECT id, firstName, lastName, gender, email FROM Users";
            
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

    } catch (Exception $e) {

        echo "<tr colspan=\"4\"><td>" . $e->getMessage() . "</td></tr>";

    }