
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

                <form method="POST" class="customF" action="logincheck.php" >
                    <h2 class="mb-4 text-left">Login</h2>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
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

  

</body>

</html>
