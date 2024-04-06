<?php
class FormProcessor {
    protected $servername = "localhost";
    private $username = "root";
    private $password = "080893";
    private $database = "web2";
    private $port = 3306;
    private $conn;

    public function __construct() {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database, $this->port);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function processFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $passwordi = $_POST["password"];
            // $card_number = $_POST["card_number"];
            $cvv = $_POST["cvv"];

            // Prepare and bind the INSERT statement
            $stmt = $this->conn->prepare("INSERT INTO Users (firstName, lastName, gender, email, passwordi, card_number, cvv) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $firstName, $lastName, $gender, $email, $passwordi, $card_number, $cvv);

            // Execute the statement
            try {
                if ($stmt->execute() === TRUE) {
                    // Redirect to homepage
                    header("Location: ../HomePage/index.php");
                    exit(); // Ensure script execution ends after redirection
                } else {
                    // Redirect to sign up page
                    header("Location: ./signUp.php");
                    exit(); // Ensure script execution ends after redirection
                }
            } catch (Exception $e) {
                // Redirect to sign up page in case of any exception
                header("Location: ./signUp.php");
                exit(); // Ensure script execution ends after redirection
            }

            // Close statement
            $stmt->close();
        }
    }

    public function closeConnection() {
        // Close connection
        $this->conn->close();
    }
}

// Create an instance of the class and process the form submission
$formProcessor = new FormProcessor();
$formProcessor->processFormSubmission();
$formProcessor->closeConnection();
?>
