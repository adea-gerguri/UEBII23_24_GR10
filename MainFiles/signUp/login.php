<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Form</title>
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
            background-size: 1670px;
            background-attachment:fixed;
            background-position: center center;
        }

        .customF {

            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        .vertical-image {
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh; /* Adjust the height as needed */
            width: auto;
        }
    </style>
    
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <form class="customF" action="../HomePage/index.php" onsubmit="return validateLogin()">
                    <h2 class="mb-4 text-left">Login</h2>

                    <div class="form-group">
                        <label for="loginEmail">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                    </div>

                    <div class="form-group">
                        <label for="audioChallenge">For security purposes: Are you a robot?</label>
                        <audio controls>
                            <source src="../signUp/land_audio.mp3" type="audio/mp3">
                            Your browser does not support the audio tag.
                        </audio>
                        <small class="text-danger" id="audioChallengeError"></small>
                    </div>
    
                    <div class="form-group">
                        <label for="robotVerificationInput">Type the word you heard:</label>
                        <input type="text" class="form-control" id="robotVerificationInput" placeholder="Enter the word" required>
                    </div>

                    <button type="submit" class="btn btn-primary" id="loginButton">Login</button>

                    <p class="mt-3">Don't have an account? <a href="signup.php" target="_blank">Sign Up</a></p>
                </form>

            </div>
            <div class="col-md-6">
                <img class="vertical-image" src="../signUp/login_back.JPG" alt="Vertical Image">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>

        hide
        $(document).ready(function() {
        $("#loginButton").click(function() {
        $(this).hide(1000);
        // show pas 5 sekondave
        setTimeout(showButton, 5000);
        });

        //show prape
        function showButton() {
        $("#loginButton").show(1000);
        }
        });
  
        var users = JSON.parse(localStorage.getItem('users')) || []; // e thirrim array

        function validateLogin() {
            var enteredEmail = document.getElementById('loginEmail').value;
            var enteredPassword = document.getElementById('loginPassword').value;

            // i marrim user info prej localStorage
            var users = JSON.parse(localStorage.getItem('users')) || [];
            console.log("USers:"+users)
            let foundUser = users.filter(user => user.email === enteredEmail && user.password === enteredPassword)[0]; 
            console.log("FoundUSer:"+foundUser);
            var input = document.getElementById('robotVerificationInput').value.toLowerCase();
        var audioChallengeError = document.getElementById('audioChallengeError');

            if (input !== 'land') {
                alert("The word entered is not correct!")
                foundUser= null // Do not allow
            }  else {
            audioChallengeError.textContent = ''; // Clear any previous error message
            // return true; // Allow 
            }
            if( foundUser !== undefined && foundUser !== null){
                alert('Login successful');                    
                    localStorage.setItem('loggedInUserEmail', foundUser.email);
                    localStorage.setItem("LogedUserName",foundUser.fullName);
                    console.log(foundUser.email)
                    let userCart = JSON.parse(localStorage.getItem(foundUser.email + '_cart')) || [];
                    localStorage.setItem('cart', JSON.stringify(userCart));

            }else{
                alert('Login failed');
                return false;
            }
        }
    </script>

</body>

</html>
