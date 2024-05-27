<?php
require_once '../signUp/DatabaseUtil.php';

function changePassword($email, $currentPassword, $newPassword) {
    try {
        $conn = DatabaseUtil::getConnection();
        
        // Check connection
        if (!$conn) {
            throw new Exception("Failed to connect to the database.");
        }

        // Retrieve the hashed password from the database
        $sql = "SELECT passwordi FROM Users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashedPassword = $row['passwordi'];

            // Verify the provided current password against the hashed password
            if (password_verify($currentPassword, $hashedPassword)) {
                // Password is correct, update to the new password
                $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = "UPDATE Users SET passwordi = :newPassword WHERE email = :email";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':newPassword', $newHashedPassword);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    echo "<script>window.location.href = './login.php';</script>";
                } else {
                    throw new Exception("Failed to update password.");
                }
            } else {
                throw new Exception("Incorrect current password.");
            }
        } else {
            throw new Exception("User not found.");
        }
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    changePassword($email, $currentPassword, $newPassword);
}
?>
