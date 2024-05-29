<?php

    function query(&$sql){

        try {

            $con = mysqli_connect('localhost', 'root', '', 'web2', '3307');

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

        } catch (Exception $e) {

            echo "<tr colspan=\"4\"><td>" . $e->getMessage() . "</td></tr>";

        }

        unset($query);

    }