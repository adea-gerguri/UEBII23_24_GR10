<?php

require_once('./DatabaseUtil.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cardNumber = $_POST['card_number'];
    $expirationDate = $_POST['expiration_date'];
    $cvv = $_POST['cvv'];

  
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedCVV = password_hash($cvv, PASSWORD_DEFAULT);

    try {
       
        $conn = DatabaseUtil::getConnection();
        $stmt = $conn->prepare("INSERT INTO Users (firstName, lastName, gender, email, card_number, passwordi, expiration_date, cvv) VALUES (:firstName, :lastName, :gender, :email, :cardNumber, :hashedPassword, :expirationDate, :hashedCVV)");
        
   
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cardNumber', $cardNumber);
        $stmt->bindParam(':hashedPassword', $hashedPassword);
        $stmt->bindParam(':expirationDate', $expirationDate);
        $stmt->bindParam(':hashedCVV', $hashedCVV);
       
        $stmt->execute();


        header("Location: ../HomePage/index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
