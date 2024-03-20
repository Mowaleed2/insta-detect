<?php
if (isset($_SESSION['email'])) {
    echo '<li><a href="/Web project/logout.php" class="li-links logot ">Logout</a></li>';
} else {
    echo '<li><a href="/Web Project/Registration.php"class="li-links ">Sign up Or Login</a></li>';
}
?>