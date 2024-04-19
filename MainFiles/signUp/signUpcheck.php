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

<?php
// Marrja e vlerave nga forma
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$card_number = $_POST['card_number'];
$expiration_date = $_POST['expiration_date'];
$cvv = $_POST['cvv'];

//manipulime me permbajtjen e stringjeve
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
        $emri_pa_numra = preg_replace('/\d+/', '', $firstName);
        echo  $emri_pa_numra . "<br>";
    }
}

//validime për email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            echo "<div class='error-message'>Please enter a valid email address.<br>";
        } else {
            echo "Email address '$email' is valid.<br>";
        }
    }
}

//Validimi për expiration_date
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["expiration_date"])){
        $expiration_date = $_POST['expiration_date']; 
    
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $expiration_date)) {
            echo "Data është në formatin e duhur.<br>";
        } else {
            echo "Formati i datës nuk është i saktë. Ju lutem shkruani datën në formatin YYYY-MM-DD.<br>";
        }
    }
}

//Validimi për numër të kartës

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['card_number'])) {
        $card_number = $_POST['card_number'];
        if (preg_match('/^\d{16}$/', $card_number)) {
            echo "<div class='success-message'>Numri i kartës së kreditit është në formatin e duhur.<br>";
        } else {
            echo "<div class='error-message'>Numri i kartës së kreditit duhet të përmbajë saktësisht 16 shifra.<br>";
        }
    } else {
        echo "<div class='error-message'>Fusha e numrit të kartës së kreditit nuk është plotësuar.<br>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cvv']) && preg_match('/^[0-9]{3}$/', $_POST['cvv']) && !preg_match('/[\s-]/', $_POST['cvv'])) {
        echo "<div class='success-message'>CVV është në formatin e duhur.</div>";
    } else {
        echo "<div class='error-message'>CVV duhet të përmbajë saktësisht 3 shifra dhe të mos përmbajë hapësira ose '-'. </div>";
    }
}

?>
