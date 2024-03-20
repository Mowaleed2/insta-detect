<?php

if (isset($_SESSION['email'])) {
// Display the name
echo $_SESSION['firstname'];
} else {
    // Display login and signup buttons only if the user is not logged in
    echo '
    <button type="button" class="button type1"><a class="reg" href="/Web project/Registration.php"><span class="btn-txt">Sign Up</span></a></button>
    <span class="or">OR</span>
    <button type="button" class="button type1"><a class="login" href="/Web project/Registration.php"><span class="btn-txt">Login</span></a></button>
    ';
}
?>

