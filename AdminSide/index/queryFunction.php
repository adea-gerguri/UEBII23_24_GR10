<?php

// include "./AdminSide/dbConn/init.php";
// include "../dbConn/init.php";


function query(&$sql){

    try {

        // print_r($query);

        $con = mysqli_connect('localhost', 'root', '', 'web2', '3307');              
        
        // $sql = "SELECT order_id, customer_id, total, order_status, orderDate FROM Orders WHERE OrderDate >= CURDATE() - INTERVAL 1 WEEK ORDER BY orderDate DESC;";

        // $resultSet = mysqli_query($con, $sql);
        $resultSet = mysqli_query($con, $sql);



        if(mysqli_num_rows($resultSet) > 0) {

            while ($row = mysqli_fetch_assoc($resultSet)){
            
                echo "<tr>";
                echo "<td>" . $row["order_id"] . "</td>";
                # echo "<td>" . $row["lastName"] . "</td>";
                echo "<td>" . $row["customer_id"] . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "<td>" . $row["order_status"] . "</td>";
                echo "<td>" . $row["orderDate"] . "</td>";
                echo "</tr>";
            
            }

        }

        $sql = "ZHUSHI ZHUSHIII";

    } catch (Exception $e) {

        echo "<tr colspan=\"4\"><td>" . $e->getMessage() . "</td></tr>";

    }

    unset($query);

}