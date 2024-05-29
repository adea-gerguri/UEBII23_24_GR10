<?php
session_start();
require_once('../signUp/DatabaseUtil.php');
require_once('./userclass.php');


function setBackgroundColorCookie($color) {
    $expirationDate = time() + (86400 * 30); // 30 days
    setcookie('backgroundColor', $color, $expirationDate, '/');
}

try {
    // Fetch user data if session is valid
    if (isset($_SESSION['user_id']) && is_numeric($_SESSION['user_id'])) {
        $conn = DatabaseUtil::getConnection();
        $stmt = $conn->prepare("SELECT * FROM Users WHERE id = ?");
        $stmt->bindParam(1, $_SESSION['user_id'], PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            // Populate user object
            $user = new User(
                $userData['id'],
                $userData['firstName'],
                $userData['lastName'],
                $userData['gender'],
                $userData['email'],
                $userData['card_number'],
                $userData['passwordi'],
                $userData['expiration_date'],
                $userData['cvv']
            );

            // Get user details
            $firstName = htmlspecialchars($user->getFirstName());
            $lastName = htmlspecialchars($user->getLastName());
            $gender = htmlspecialchars($user->getGender());
            $email = htmlspecialchars($user->getEmail());
            $cardNumber = htmlspecialchars($user->getCardNumber());
            $expirationDate = htmlspecialchars($user->getExpirationDate());
        } else {
            // Error fetching user data
            $firstName = "Error fetching user data";
            $lastName = "";
            $gender = "";
            $email = "";
            $cardNumber = "";
            $expirationDate = "";
        }
    } else {
        // Invalid user ID
        $firstName = "Invalid user ID";
        $lastName = "";
        $gender = "";
        $email = "";
        $cardNumber = "";
        $expirationDate = "";
    }
} catch (PDOException $e) {
    // Database error
    $firstName = "Database error: " . $e->getMessage();
    $lastName = "";
    $gender = "";
    $email = "";
    $cardNumber = "";
    $expirationDate = "";
}

// Track the number of times the profile is visited
if (isset($_SESSION['visited_profile'])) {
    $_SESSION['visited_profile']++;
} else {
    $_SESSION['visited_profile'] = 1;
}

// Retrieve previous visits count from cookie, if exists
$previousVisits = isset($_COOKIE['visited_profile']) ? $_COOKIE['visited_profile'] : 0;
$currentVisits = $_SESSION['visited_profile'];

// Set the cookie for visited profile count
setcookie('visited_profile', $currentVisits, time() + (86400 * 30), "/");

// Retrieve background color from query parameter or default to white
$backgroundColor = isset($_GET['color']) ? $_GET['color'] : 'white';

// Set the background color cookie
setBackgroundColorCookie($backgroundColor);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php /*include '../HeaderFooter/header.php'*/ ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Info</title>
    <!-- <link rel="stylesheet" href="style.css">  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Caprasimo&family=DM+Serif+Display&family=Kanit:wght@200;300;400&family=Lobster&family=Preahvihear&family=Vina+Sans&display=swap" rel="stylesheet">
    <link href="../HeaderFooter/footerStyle.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Caprasimo&family=DM+Serif+Display&family=Kanit:wght@200;300;400&family=Lobster&family=Montserrat:wght@300&family=Preahvihear&family=Vina+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<style>
    body {
        padding-top: 15px;
        /* Adjust this value as needed */
    }

    #userinfo {
        margin-top: 100px !important;
    }
</style>

<body style="background-color: <?php echo $backgroundColor; ?>">
    <div id="userinfo" class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input type="text" id="firstName" class="form-control" value="<?php echo $firstName; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName" class="form-control" value="<?php echo $lastName; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <input type="text" id="gender" class="form-control" value="<?php echo $gender; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" value="<?php echo $email; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number:</label>
                            <input type="text" id="cardNumber" class="form-control" value="<?php echo $cardNumber; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="expirationDate">Expiration Date:</label>
                            <input type="text" id="expirationDate" class="form-control" value="<?php echo $expirationDate; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" class="form-control" value="<?php echo "**************" ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV:</label>
                            <input type="password" id="cvv" class="form-control" value="<?php echo "*************"; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="times">Visited Profile:</label>
                            <input type="times" id="times" class="form-control" value="<?php echo $_SESSION['visited_profile'] . " times" ?>" readonly>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary me-2" id="editBtn" onclick="enableEditing()">Edit</button>
                        <button class="btn btn-secondary me-2" id="cancelBtn" onclick="disableEditing() submitForm()">Submit</button>
                        <button class="btn btn-secondary me-2" onclick="changeColor('darkgray')">Dark Mode</button>
                        <button class="btn btn-secondary me-2" onclick="changeColor('white')">White Mode</button>
                        <a href="../HomePage/index.php"><button class="btn btn-secondary me-2" id="goBack">Go Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to change background color and set the cookie
        function changeColor(color) {
            window.location.href = '<?php echo $_SERVER["PHP_SELF"]; ?>?color=' + color;
        }

        // Function to submit form data asynchronously
        function submitForm() {
            var firstName = document.getElementById('firstName').value;
            var lastName = document.getElementById('lastName').value;
            var gender = document.getElementById('gender').value;
            var email = document.getElementById('email').value;
            var cardNumber = document.getElementById('cardNumber').value;
            var expirationDate = document.getElementById('expirationDate').value;
            var password = document.getElementById('password').value;
            var cvv = document.getElementById('cvv').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', './updateUserInfo.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('Data updated successfully.');
                    } else {
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
            xhr.send('&firstName=' + encodeURIComponent(firstName) +
                '&lastName=' + encodeURIComponent(lastName) +
                '&gender=' + encodeURIComponent(gender) +
                '&email=' + encodeURIComponent(email) +
                '&cardNumber=' + encodeURIComponent(cardNumber) +
                '&expirationDate=' + encodeURIComponent(expirationDate) +
                '&password=' + encodeURIComponent(password) +
                '&cvv=' + encodeURIComponent(cvv));
        }
    </script>

    <script src="./edit.js"></script>
</body>

</html>
