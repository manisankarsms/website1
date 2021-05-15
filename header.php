<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="media/favicon.ico" type="image/x-icon">
    <title>MTHC</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/init.js"></script>
</head>
<body>
    <?php include "load.php"; include "components/popup.php"; ?>
    <header class="df fw aic bb">
        <a class="logo_sec" href="/">
            <picture>
                <source srcset="media/mlogo.png" media="(max-width: 800px)" />
                <img src="media/logo.png" alt="Brand Logo" style="max-width: 600px;width:100%;" />
            </picture>
        </a>
        <div class="address df">
            <a href="tel:9842403039" class="alink df">
            <i class="fas fa-mobile-alt"></i>
                <span>Mobile <br/><span>9842403039</span></span>
            </a>
            <a href="tel:04362 226700" class="alink df">
                <i class="fas fa-phone"></i>
                <span>Phone <br/><span>04362 226700</span></span>
            </a>
            <a href="mailto:yourmail@email.com" class="alink df">
                <i class="fas fa-envelope"></i>
                <span>Email <br/><span>healthcenter@motherteresafoundation.org</span></span>
            </a>
        </div>
        <div id="bars"><div class="bar"></div></div>
    </header>
    <header class="df aic fw jcsb">
        <nav id="nav" class="hnav df">
            <a href="./" data-act="home">Home</a>
            <a href="./about.php" data-act="about">about</a>
            <a href="./specialities.php" data-act="specialities">specialities</a>
            <a href="./faci.php" data-act="faci">Facilities</a>
            <a href="./testi.php" data-act="testi">testimonials</a>
            <div data-act="serv" class="dropdown wlink" data-to='./serv.php' >
                <span class="drop" style="pointer-events:none;">services</span>
                <span class="down">
                    <a href="serv.php#servCards">Mother Teresa Anbu Illam</a>
                    <a href="serv.php#servCards">Mother Teresa Education Program</a>
                    <a href="serv.php#servCards">Mother teresa Joy Home</a>
                    <a href="serv.php#servCards">Mother teresa AmudhaSurabhi</a>
                </span>
            </div>
            <a href="./gallery.php" data-act="gallery">gallery</a>
            <a href="https://motherteresafoundation.org/blog/" target="_blank">blog</a>
            <a href="./contact.php" data-act="contact">contact</a>
        </nav>
        <div class="social">
            <a href="https://www.facebook.com/motherteresafoundation/" target="_blank" ><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/motherteresafdn?lang=en" target="_blank" ><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCo5y8NYA1rQKNuhzgQjzV5Q" target="_blank" ><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/motherteresa.foundation/" target="_blank" ><i class="fab fa-instagram-square"></i></a>
        </div>
    </header>
    <script>
        G('bars').onclick = function () {G('bars').classList.toggle(A);G('nav').classList.toggle(A)}
        Q('.wlink').onclick =function(e) { window.location.href = e.target.dataset.to;}
    </script>