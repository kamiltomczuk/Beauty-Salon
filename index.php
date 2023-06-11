<?php
$user = '####';
$password = '####';

// Database name is test
$database = '####';

// Server is localhost with
// port number 3306
$servername='####';
$mysqli = new mysqli($servername, $user,
    $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
}

$sql1 = "SELECT * from uslugi WHERE id =1";
$result1 = $mysqli->query($sql1);
$usluga1 = $result1->fetch_assoc();
$sql2 = "SELECT * from uslugi WHERE id =2";
$result2 = $mysqli->query($sql2);
$usluga2 = $result2->fetch_assoc();
$sql3 = "SELECT * from uslugi WHERE id =3";
$result3 = $mysqli->query($sql3);
$usluga3 = $result3->fetch_assoc();
$sql4 = "SELECT * from uslugi WHERE id =4";
$result4 = $mysqli->query($sql4);
$usluga4 = $result4->fetch_assoc();
$mysqli->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Urodex</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
        crossorigin="anonymous"
    />
</head>
<body>
<!-- Navbar Section -->
<nav class="navbar">
    <div class="navbar__container">
        <a href="#home" id="navbar__logo">Urodex</a>
        <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
            <li class="navbar__item">
                <a href="#home" class="navbar__links" id="home-page">Strona główna</a>
            </li>
            <li class="navbar__item">
                <a href="#about" class="navbar__links" id="about-page">O nas</a>
            </li>
            <li class="navbar__item">
                <a href="#services" class="navbar__links" id="services-page"
                >Rodzaje usług</a
                >
            </li>
            <li class="navbar__btn">
                <a href="loginregister/register.php" class="button" id="signup">Dołącz do nas</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero" id="home">
    <div class="hero__container">
        <h1 class="hero__heading">Nowoczesny <span>salon</span></h1>
        <p class="hero__description">Świetne ceny</p>
        <button class="main__btn"><a href="loginregister/register.php">Umów się dzisiaj</a></button>
    </div>
</div>

<!-- About Section -->
<div class="main" id="about">
    <div class="main__container">
        <div class="main__img--container">
            <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
        </div>
        <div class="main__content">
            <h1>Urodex</h1>
            <h2>Jesteśmy z wamy od 2015 roku</h2>
            <p>Oferujemy usługi każdego radzaju oraz każdej osobie</p>
            <button class="main__btn"><a href="#">Dowiedz się więcej</a></button>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="services" id="services">
    <h1>Usługi</h1>
    <div class="services__wrapper">
        <div class="services__card">
            <h2><?php echo $usluga1['nazwa_uslugi'] ?></h2>
            <p><?php echo $usluga1['cena_uslugi'] ?>zł</p>
            <div class="services__btn"><button><a href="loginregister/register.php">Umów się</a></button></div>
        </div>
        <div class="services__card">
            <h2><?php echo $usluga2['nazwa_uslugi'] ?></h2>
            <p><?php echo $usluga2['cena_uslugi'] ?>zł</p>
            <div class="services__btn"><button><a href="loginregister/register.php">Umów się</a></button></div>
        </div>
        <div class="services__card">
            <h2><?php echo $usluga3['nazwa_uslugi'] ?></h2>
            <p><?php echo $usluga3['cena_uslugi'] ?>zł</p>
            <div class="services__btn"><button><a href="loginregister/register.php">Umów się</a></button></div>
        </div>
        <div class="services__card">
            <h2><?php echo $usluga4['nazwa_uslugi'] ?></h2>
            <p><?php echo $usluga4['cena_uslugi'] ?>zł</p>
            <div class="services__btn"><button><a href="loginregister/register.php">Umów się</a></button></div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="main" id="sign-up">
    <div class="main__container">
        <div class="main__content">
            <h1>Dołącz do nas</h1>
            <h2>Załóż kartę stałego klienta</h2>
            <p>I zobacz rabaty</p>
            <button class="main__btn"><a href="loginregister/register.php">Dołącz</a></button>
        </div>
        <div class="main__img--container">
            <div class="main__img--card" id="card-2">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>
</div>
<!-- Opinions Section -->
<div class="opinions">
    <div class="opinions__container">
        <div class="opinions__content">

        </div>
    </div>
</div>
<!-- Footer Section -->
<div class="footer__container">
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>About Us</h2>
                <a href="/">How it works</a> <a href="/">Testimonials</a>
                <a href="/">Careers</a> <a href="/">Terms of Service</a>
            </div>
            <div class="footer__link--items">
                <h2>Contact Us</h2>
                <a href="/">Contact</a> <a href="/">Support</a>
                <a href="/">Destinations</a>
            </div>
        </div>
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>Videos</h2>
                <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                <a href="/">Agency</a>
            </div>
            <div class="footer__link--items">
                <h2>Social Media</h2>
                <a href="/">Instagram</a> <a href="/">Facebook</a>
                <a href="/">Youtube</a> <a href="/">Twitter</a>
            </div>
        </div>
    </div>
    <section class="social__media">
        <div class="social__media--wrap">
            <div class="footer__logo">
                <a href="/" id="footer__logo">URODEX</a>
            </div>
            <p class="website__rights">© URODEX 2022. All rights reserved</p>
            <div class="social__icons">
                <a href="/" class="social__icon--link" target="_blank"
                ><i class="fab fa-facebook"></i
                    ></a>
                <a href="/" class="social__icon--link"
                ><i class="fab fa-instagram"></i
                    ></a>
                <a href="/" class="social__icon--link"
                ><i class="fab fa-youtube"></i
                    ></a>
                <a href="/" class="social__icon--link"
                ><i class="fab fa-linkedin"></i
                    ></a>
                <a href="/" class="social__icon--link"
                ><i class="fab fa-twitter"></i
                    ></a>
            </div>
        </div>
    </section>
</div>

<script src="js/appunlogged.js"></script>
</body>
</html>
