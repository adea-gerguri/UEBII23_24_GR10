<?php
// session_start();
require_once('../signUp/DatabaseUtil.php');

try {
    // Get a database connection
    $conn = DatabaseUtil::getConnection();

    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $cardNumber = $_POST['cardNumber'];
    $password = $_POST['password'];
    $expirationDate = $_POST['expirationDate'];
    $cvv = $_POST['cvv'];

    // Hash sensitive data
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedCVV = password_hash($cvv, PASSWORD_DEFAULT);

    // Prepare SQL statement to update user data in the database
    $stmt = $conn->prepare("UPDATE Users SET 
                            firstName = :firstName, 
                            lastName = :lastName, 
                            gender = :gender,
                            email = :email,
                            card_number = :cardNumber,
                            passwordi = :passwordi,
                            expiration_date = :expirationDate,
                            cvv = :cvv 
                            WHERE id = :userId");

    // Bind parameters
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cardNumber', $cardNumber);
    $stmt->bindParam(':passwordi', $hashedPassword);
    $stmt->bindParam(':expirationDate', $expirationDate);
    $stmt->bindParam(':cvv', $hashedCVV);
    $stmt->bindParam(':userId', $_SESSION['user_id']);

    // Execute the prepared statement
    $stmt->execute();

    // Close the database connection
    $conn = null;

    // Return success response
    echo "Data updated successfully.";
} catch (PDOException $e) {
    // Handle database errors
    echo "Database error: " . $e->getMessage();
}

?>
