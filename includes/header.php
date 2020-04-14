<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>House of Code - Full-Service App-Bureau - Odense, Aarhus og København</title>

        <!-- CSS -->
        <!-- custom css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <!-- jQuery waypoints -->
        <script src="../assets/js/jquery.waypoints.min.js" defer></script>
        <!-- custom js -->
        <script src="assets/js/script.js" defer></script>
    </head>
    <body>
        <header>
            <!-- mobile navigation -->
            <nav id="mobileNav">
                <div id="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div id="mobile-overlay">
                    <div class="mobile-header-row">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/hoc-icon-white.svg" alt="Logo"/>
                            </a>
                        </div>
                    </div>
                    <?php
                    if ($_GET['page'] == 'forside' || !isset($_GET['page']) || empty($_GET['page'])) {
                        echo "";
                    } else {
                        echo "<a href=\"index.php\" class=\"back2start\"> &lt; Tilbage </a> ";
                    }
                    ?>
                    <ol id="mobile-navlinks">

                        <li class="mobile-navlink"><a href="#">Projekter</a></li>
                        <li class="mobile-navlink"><a href="#">Det vi tilbyder</a></li>
                        <li class="mobile-navlink"><a href="index.php">Find en pris</a></li>
                        <li class="mobile-navlink"><a href="#">Lær os at kende</a></li>
                        <li class="mobile-navlink"><a href="#">Jobs i huset</a></li>
                        <li class="mobile-navlink"><a href="#">Blog & Nyheder</a></li>
                        <li class="mobile-navlink"><a href="#">Kontakt</a></li>
                    </ol>
                </div>
            </nav>


            <div class="mobile-header-row">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/hoc-icon-white.svg" alt="Logo"/>
                    </a>
                </div>
            </div>
            <!-- desktop navigation -->
            <nav id="desktopNav">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/hoc-icon-white.svg" alt="Logo"/>
                    </a>
                </div>
                <?php
                if ($_GET['page'] == 'forside' || !isset($_GET['page']) || empty($_GET['page'])) {
                    echo "";
                } else {
                    echo "<a href=\"index.php\" class=\"back2start\"> &lt; Tilbage </a> ";
                }
                ?>
                <ol>
                    <li><a href="#">Projekter</a></li>
                    <li><a href="#">Det vi tilbyder</a></li>
                    <li><a href="index.php">Find en pris</a></li>
                    <li><a href="#">Lær os at kende</a></li>
                    <li><a href="#">Jobs i huset</a></li>
                    <li><a href="#">Blog & Nyheder</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ol>
            </nav>
        </header>
        <main>