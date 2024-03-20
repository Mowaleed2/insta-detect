<?php
session_start();
if (isset($_SESSION['email'])) {
    echo '<a href="/Web Project/profile.php"><div class="circle"><img src="./pre.png" alt=""></div></a>';
    echo '<button type="button" class="profile-button type1"><a class="login" href="/Web project/logout.php"><span class="btn-txt">Logout</span></a></button>';
} else {
    // Display login and signup buttons only if the user is not logged in
    echo '
    <div class = "si">
    <button type="button" class="button type1"><a class="reg" href="/Web project/Registration.php"><span class="btn-txt">Sign Up</span></a></button>
    <button type="button" class="button type1"><a class="login" href="/Web project/Registration.php"><span class="btn-txt">Login</span></a></button>
    </div>
    ';
}
?>