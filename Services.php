<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Responsive.css">
    <link rel="stylesheet" href="css/all.css">


    <title>Services</title>
</head>

<body>
    <!-- Header Section -->
    <header>
        <section class="upper-header">
            <div>
                <h1 id="header-logo">Insta</h1>
            </div>
            <!-- Server-side include for header.php -->
            <?php include('header.php'); ?>
            <div class="checko">
                <input type="checkbox" id="check">
                <label for="check"><i class="fas fa-bars"></i></label>
                <section class="lower-header2 ">
                    <ul>
                        <li><a href="/Web project/index.html" class="li-links ">HOME</a></li>
                        <li><a href="/Web Project/Services.php " class="li-links ">SERVICES</a></li>
                        <li><a href="/Web Project/ContactUs.html " class="li-links ">CONTACT US</a></li>
                        <li><a href="/Web Project/Community.html" class="li-links ">Community</a></li>
                        <?php include('li.php'); ?>
                    </ul>
                </section>
            </div>
        </section>
        <hr>
        <section class="lower-header ">
            <ul>
                <li><a href="/Web project/index.html" class="li-links ">HOME</a></li>
                <li><a href="/Web Project/Services.php " class="li-links ">SERVICES</a></li>
                <li><a href="/Web Project/ContactUs.html " class="li-links ">CONTACT US</a></li>
                <li><a href="/Web Project/Community.html" class="li-links ">Community</a></li>
            </ul>
        </section>

    </header>
    <img class="serv-img" src="images/serv.jpg" alt="">
    <h2 class="services-title">
        Services !
    </h2>
    <span class="line2"></span>
    <section class="serv">
        <a href='/Web Project/mri-center.html' class='serv1 services'>
            <img class="mri-scan" src="images/eye-scan.png" alt="">
            <h2>MRI SCANNER</h2>
            <h3>Scan your MRI </h3>
        </a>
        <a class='serv2 services' <?php if (isset($_SESSION['email'])) {
                                        echo 'href="/Web Project/mri-History.html"';
                                    } else {
                                        echo 'href="#" onclick="alert(\'Please log in to access this feature.\')"';
                                    } ?>>
            <img class="mri-scan " src="images/check.png " alt=" ">
            <h2>History of MRIs</h2>
            <h3 class="His ">History Of Mris Here !</h3>
        </a>
    </section>

    <footer>
        <hr class="hr-fotter ">
        <img src="images/whatsapp.png " alt=" " srcset=" ">
        <img src="images/instagram.png " alt=" " srcset=" ">
        <img src="images/linkedin.png " alt=" " srcset=" ">
        <img src="images/facebook.png " alt=" " srcset=" ">
        <h2>Copyright © 2024 MRI, EELU</h2>
        <h2>Legal Stuff | Privacy Policy | Security </h2>
    </footer>
</body>
<script defer src="js/jquery-3.7.1.min.js "></script>
<script defer src="js/serv.js "></script>

</html>