
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

//manipulime me permbajtjen e stringjeve (nese te emri jane shenuar edhe numra, numrat largohen)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
        $emri_pa_numra = preg_replace('/\d+/', '', $firstName);
        echo "Emri i shkruar nga perdoruesi: " . $firstName . ". ";
        echo "Emri pa karaktere qe nuk jane shkronja: " . $emri_pa_numra . ".<br>";
    }
}




//Validimi i email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            echo "<div class='error-message'>Vendosni nje e-mail valid<br>";
        } else {
            echo "Email adresa '$email' eshte valide.<br>";
        }
    }
}


//Validimi per date (te expiration_date)
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["expiration_date"])){
        $expiration_date = $_POST['expiration_date']; 
    
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $expiration_date)) {
            echo "Data eshte ne formatin e duhur.<br>";
        } else {
            echo "Formati i dates nuk eshte i sakte. Ju lutem shkruani daten ne formatin YYYY-MM-DD.<br>";
        }
    }
}

//Validimi i vlerave numerike dhe ndarja e tyre me hapesire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['card_number'])) {
        $card_number = $_POST['card_number'];
        $card_number = preg_replace('/\s+/', '', $card_number);
        
        if (preg_match('/^\d{16}$/', $card_number)) {
            $formatted_card_number = chunk_split($card_number, 4, ' ');
            echo "<div class='success-message'>Numri i kartes se kreditit eshte ne formatin e duhur: $formatted_card_number</div>";
        } else {
            echo "<div class='error-message'>Numri i kartes se kreditit duhet te permbaje saktesisht 16 shifra.</div>";
        }
    } else {
        echo "<div class='error-message'>Fusha e numrit te kartes se kreditit nuk eshte plotesuar.</div>";
    }
}


//Validimi i CVV (CVV duhet te kete vetem 3 numra)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cvv']) && preg_match('/^[0-9]{3}$/', $_POST['cvv'])) {
        echo "<div class='success-message'>CVV eshte ne formatin e duhur.</div>";
    } else {
        echo "<div class='error-message'>CVV duhet te permbaje saktesisht 3 shifra.</div>";
    }
}


    try {
       
        $conn = DatabaseUtil::getConnection();
        $stmt = $conn->prepare("INSERT INTO Users (firstName, lastName, gender, email, card_number, passwordi, expiration_date, cvv) 
        VALUES (:firstName, :lastName, :gender, :email, :cardNumber, :hashedPassword, :expirationDate, :hashedCVV)");
        
   
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


