<?php
session_start();

$servername= "localhost";
$username = "root";
$password = "080893";
$database = "web2";
$port = 3306;

try {
    $conn = new mysqli($servername, $username, $password, $database, $port);

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $email = $_POST["email"];
        $passwordi = $_POST["passwordi"];

        $stmt = $conn->prepare("SELECT * FROM Users WHERE email = ? AND passwordi= ? ");
        $stmt->bind_param("ss", $email, $passwordi);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Login successful, set session variables
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['id']; // Assuming 'id' is the primary key of your Users table
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_fullname'] = $user['firstName'] . ' ' . $user['lastName'];

            // Redirect to homepage or any other authorized page
            header("Location: ../HomePage/index.php");
            exit();
        } else {
            // Redirect back to the login page with an error message
            $_SESSION['login_error'] = "Invalid email or password";

            header("Location: ./login.php");
            exit();
        }

        $stmt->close();
    } else {
        // Redirect back to the login page if no form is submitted
        header("Location: ./login.php");
        exit();
    }
} catch (Exception $e) {
    // Handle the exception
    $_SESSION['login_error'] = "An error occurred: " . $e->getMessage();
    header("Location: ./login.php");
    exit();
} finally {
    if (isset($conn)) {
        $conn->close();
    }
}
?>

<?php
/*
    $servername= "localhost";
    $username = "root";
    $password = "080893";
    $database = "web2";
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, $database, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $email = $_POST["email"];
        $passwordi = $_POST["passwordi"];

        $stmt = $conn->prepare("SELECT * FROM Users WHERE email = ? AND passwordi= ? ");
        $stmt->bind_param("ss", $email, $passwordi);
        $stmt->execute();
        $result = $stmt->get_result();

        // if($result->num_rows == 1){
        //     echo "Login successful";
        // }
        // else {
        //     echo "Login failed";
        // }
        try {
            if ($stmt->execute() === TRUE) {
                // Redirect to homepage
                header("Location: ../HomePage/index.php");
                exit(); // Ensure script execution ends after redirection
            } else {
                // Redirect to sign up page
                header("Location: ./login.php");
                exit(); // Ensure script execution ends after redirection
            }
        } catch (Exception $e) {
            // Redirect to sign up page in case of any exception
            header("Location: ./login.php");
            exit(); // Ensure script execution ends after redirection
        }

        $stmt->close();
    }
    else{
        echo "No form submitted";
    }
    $conn->close();

   */ 



?> 