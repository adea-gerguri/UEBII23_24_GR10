<?php
// Include the DatabaseUtil class for database connection
require_once('./DatabaseUtil.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cardNumber = $_POST['card_number'];
    $expirationDate = $_POST['expiration_date'];
    $cvv = $_POST['cvv'];

    // Hash and salt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedCVV = password_hash($cvv, PASSWORD_DEFAULT);

    try {
        // Get a database connection
        $conn = DatabaseUtil::getConnection();

        // Prepare SQL statement to insert user data into the database
        $stmt = $conn->prepare("INSERT INTO Users (firstName, lastName, gender, email, card_number, passwordi, expiration_date, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $gender, $email, $cardNumber, $hashedPassword, $expirationDate, $hashedCVV]);

        // Redirect to a success page or perform other actions
        header("Location: ../HomePage/index.php");
        exit();
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
    }
}
?>
