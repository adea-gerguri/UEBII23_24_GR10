<?php


session_start();

require_once('./DatabaseUtil.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $conn = DatabaseUtil::getConnection();

        $stmt = $conn->prepare("SELECT id, firstName, passwordi FROM Users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['passwordi'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['firstName'];

            // Save email and password in an array
            $credentials = ['email' => $email, 'password' => $password];

            // Serialize the array
            $credentialsSerialized = serialize($credentials);

            // Save serialized array in a cookie
            setcookie('credentials', $credentialsSerialized, time() + (86400 * 10), "/");

            header("Location: ../HomePage/index.php");
            exit();
        } else {
            var_dump("Invalid email or password") ;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


// session_start();

// require_once('./DatabaseUtil.php');


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     try {
//         $conn = DatabaseUtil::getConnection();


//         $stmt = $conn->prepare("SELECT id, firstName, passwordi FROM Users WHERE email = ?");
//         $stmt->execute([$email]);
//         $user = $stmt->fetch();
       
//         if ($user && password_verify($password, $user['passwordi'])) {
//             $_SESSION['user_id'] = $user['id'];
//             $_SESSION['user_name'] = $user['firstName'];
           
//             $emailArray = ['email' => $email];
//             $emailSerialized = serialize($emailArray);
//            setcookie('emailArray', $emailSerialized, time() + (86400 * 10), "/"); 
       
       
//             header("Location: ../HomePage/index.php");
//             exit();
//         } else {
//             echo "Invalid email or password";
//         }
//     } catch (PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
// }




// session_start();
// // Include the DatabaseUtil class for database connection
// require_once('./DatabaseUtil.php');

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $email = $_POST['email'];
//     $password = $_POST['password'];


//     try {
//         // Get a database connection
//         $conn = DatabaseUtil::getConnection();

//         // Prepare SQL statement to retrieve user data from the database
//         $stmt = $conn->prepare("SELECT id, firstName, passwordi FROM Users WHERE email = ?");
//         $stmt->execute([$email]);
//         $user = $stmt->fetch();
       

//         // Verify password
//         if ($user && password_verify($password, $user['passwordi'])) {
//             // Password is correct, set session variables and redirect to homepage
//             $_SESSION['user_id'] = $user['id'];
//             $_SESSION['user_name'] = $user['firstName'];
           
       
//             header("Location: ../HomePage/index.php");
           
//             exit();
//         } else {
//             // Invalid email or password
//             echo "Invalid email or password";
//         }
//     } catch (PDOException $e) {
//         // Handle database errors
//         echo "Error: " . $e->getMessage();
//     }
// }
?>