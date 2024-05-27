<?php
require_once '../signUp/DatabaseUtil.php'; // Ensure this path is correct

// Set custom error and exception handlers
set_error_handler('customErrorHandler');
set_exception_handler('customExceptionHandler');

function createDeletedUsersTable($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS DeletedUsers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email NVARCHAR(100) NOT NULL,
        hashed_password NVARCHAR(200) NOT NULL
    )";
    $conn->exec($sql);
}

function deleteUser($email, $password) {
    try {
        $conn = DatabaseUtil::getConnection();
        
        // Check connection
        if (!$conn) {
            throw new Exception("Failed to connect to the database.");
        }

        // Create DeletedUsers table if it doesn't exist
        createDeletedUsersTable($conn);

        // Retrieve the hashed password from the database
        $sql = "SELECT passwordi FROM Users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashedPassword = $row['passwordi'];

            // Verify the provided password against the hashed password
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, delete the user
                $sql = "DELETE FROM Users WHERE email = :email AND passwordi = :passwordi";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':passwordi', $hashedPassword);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    // Insert into DeletedUsers table
                    $sql = "INSERT INTO DeletedUsers (email, hashed_password) VALUES (:email, :hashed_password)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':hashed_password', $hashedPassword);
                    $stmt->execute();

                    echo "<script>window.location.href = '../signUp/login.php';</script>";
                } else {
                    throw new UserNotFoundException();
                }
            } else {
                throw new Exception("Incorrect password.");
            }
        } else {
            throw new UserNotFoundException();
        }
    } catch (Exception $e) {
        logException($e);
        echo displayError($e);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // Use 'password' key
    deleteUser($email, $password);
}

// Custom exception class
class UserNotFoundException extends Exception {
    protected $message = 'Nuk kemi gjetur përdorues me këtë llogari';
}

// Function to display error messages
function displayError($e) {
    if ($e instanceof UserNotFoundException) {
        return $e->getMessage();
    } else {
        return "An error occurred: " . $e->getMessage();
    }
}

// Function to log exceptions
function logException($e) {
    logErrorDetails($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine(), $e->getTrace());
}

// Custom error handler
function customErrorHandler($errno, $errstr, $errfile, $errline, $errcontext) {
    logErrorDetails($errstr, $errno, $errfile, $errline, $errcontext);
    echo "An error occurred. Please try again later.";
}

// Custom exception handler
function customExceptionHandler($e) {
    logException($e);
    echo displayError($e);
}

// Function to log error details
function logErrorDetails($errstr, $errno, $errfile, $errline, $errcontext) {
    $logFile = 'error_log.txt';
    $errorDetails = sprintf(
        "Error: [%d] %s\nFile: %s\nLine: %d\nContext: %s\n\n",
        $errno,
        $errstr,
        $errfile,
        $errline,
        json_encode($errcontext, JSON_PRETTY_PRINT)
    );

    if ($file = fopen($logFile, 'a')) {
        fwrite($file, $errorDetails);
        fclose($file);
    } else {
        echo "Failed to log error.";
    }
}
?>
