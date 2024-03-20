<?php
include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmselect = $db->prepare($sql);

$result = $stmselect->execute([$email]);

if ($result) {
 
    session_start();
    $user = $stmselect->fetch(PDO::FETCH_ASSOC);

    if ($user && $password === $user['password']) {
    
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
    
        header("Location: /Web Project/index.html");
    } else {
        // Display an error message if the user is not found or the password is incorrect
        echo "User Not Found or Incorrect Password!";
    }
} else {
    // Display an error message if there was an issue with the database query
    echo 'An error occurred in the database query.';
}
?>
