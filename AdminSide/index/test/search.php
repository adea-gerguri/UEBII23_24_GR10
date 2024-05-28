<?php
include "./AdminSide/dbConn/init.php";
// echo"<script> console.log('ledri vula')</script>";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $searchTerm = "%" . $_POST['searchTerm'] . "%";

    $stmt = $conn->prepare("SELECT id, firstName, lastName, gender, email FROM Users WHERE firstName LIKE :searchTerm OR lastName LIKE :searchTerm");
    $stmt->bindParam(':searchTerm', $searchTerm);
    $stmt->execute();

    $users = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $users[] = $row;
    }

    echo json_encode($users);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
