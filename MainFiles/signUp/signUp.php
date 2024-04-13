<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="../signUp/signUp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: url('../signUp/abstractback.jpg') repeat;
            background-size: 1600px;
            background-attachment: fixed;
            background-position: center center;
        }

        .customF {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        #passwordStrength {
            color: #4caf50;
            font-weight: bold;
        }
    </style>
   
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <form method="post" action="signUpcheck.php" class="customF" id="customF"  onsubmit="return validateForm()">
                    <h2 class="mb-4 text-left">Sign Up</h2>

                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" required value="example@mail.com" list="emailOptions">
                        <datalist id="emailOptions">
                            <option value="example@mail.com">
                            <option value="example@gmail.com">
                            <option value="example@hotmail.com">
                            <option value="example@yahoo.com">
                            <option value="example@student.uni-pr.edu">
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        <!-- Output for psw strength-->
                        <output class="form-control" id="passwordStrength" name="passwordStrength"></output>
                        <small class="text-danger" id="passwordError"></small>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                    </div>

                    <div class="form-group">
                        <label for="card_number">Card Number</label>
                        <input name="card_number" type="number" class="form-control" id="card_number" placeholder="Enter your card number" required>
                    </div>


                    <div class="form-group">
                        <label for="expiration_date">Expiration Date</label>
                        <input name="expiration_date" type="text" class="form-control" id="expirationDate" placeholder="DD-MM-YYYY" required>
                    </div>

                    <div class="form-group" onsubmit="return valideCVV()">
                        <label for="cvv">CVV</label>
                        <input name="cvv" type="text" class="form-control" id="cvv" placeholder="Enter CVV" required>
                    </div>


                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newsletter" value="subscribe" checked>
                            <label class="form-check-label" for="newsletter">Subscribe to newsletter</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="audioChallenge">For security purposes: Are you a robot?</label>
                        <audio controls>
                            <source src="../signUp/lion_audio1.mp3" type="audio/mp3">
                            Your browser does not support the audio tag.
                        </audio>
                        <small class="text-danger" id="audioChallengeError"></small>
                    </div>
    
                    <div class="form-group">
                        <label for="robotVerificationInput">Type the word you heard:</label>
                        <input type="text" class="form-control" id="robotVerificationInput" placeholder="Enter the word" required>
                    </div>

                    <button type="submit" class="btn btn-primary" id="signupButton">Sign Up</button>
                    
                    

                    <p class="mt-3">Already have an account? <a href="login.php" target="_blank">Go to Login</a></p>
                </form>
            </div>
                <div class="col-md-6">
                    <img class="vertical-image" src="../signUp/signup_back.JPG" alt="Vertical Image">
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../signUp/passwordtrycatch.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // password strength check
        document.getElementById('password').addEventListener('input', function () {
            var password = this.value;
            var strength = 'Weak';
            var color = 'red';

            if (password.length >= 8) {
                strength = 'Medium';
                color = 'orange';
            }

            if (password.length >= 12) {
                strength = 'Strong';
                color = 'green';
            }

            document.getElementById('passwordStrength').textContent = 'Password Strength: ' + strength;
            document.getElementById('passwordStrength').style.color = color;

            // Show warning for weak passwords
            var warning = document.getElementById('passwordError');
            warning.textContent = '';
            if (password.length > 0 && password.length < 8) {
                warning.textContent = 'Password is too weak.';
            }
        });
   


    </script>
     <script>
        // function showCookieConsent() {
        //     var consent = confirm("This website uses cookies to ensure you get the best experience. Do you want to allow cookies?");
        //     if (!consent) {
        //         alert("You have chosen not to allow cookies. Some features of the website may not work properly.");
        //         window.location.href = "../HomePage/index.php"; 
        //     }
        // }
        // window.onload = showCookieConsent;
    </script>

    <?php
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $card_number = $_POST['card_number'];
        //     $cvv = $_POST['cvv'];
        //     $expiration_date = $_POST['expiration_date'];

        //     //Cookies per 30 dite
        //     setcookie('card_number', $card_number, time() + (86400 * 30), "/"); 
        //     setcookie('cvv', $cvv, time() + (86400 * 30), "/"); 
        //     setcookie('expiration_date', $expiration_date, time() + (86400 * 30), "/"); 

        // }
        // else {
        //     echo "<script>alert('Try inputing the card information first please!');</script>";
        // }
    ?>

</body>

</html>
