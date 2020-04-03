<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>House of Code - Full-Service App-Bureau - Odense, Aarhus og København</title>

        <!-- CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <!-- mobile navigation -->
            <nav role="navigation" id="mobileNav">
                <div id="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
            
            <div id="mobile-header-row"><div class="logo">
                    <a href="index.php">
                        <!--<img style="filter: invert(100%) brightness(200%);" src="https://www.houseofcode.io/wp-content/themes/hoc/library/img/svg/hoc-icon-color.svg" alt="Logo"/>-->
                        <img src="assets/img/hoc-icon-white.svg" alt="Logo"/>
                    </a>
                </div></div>
            <!-- desktop navigation -->
            <nav role="navigation" id="desktopNav">
                <div class="logo">
                    <a href="index.php">
                        <!--<img src="https://www.houseofcode.io/wp-content/themes/hoc/library/img/svg/hoc-icon-color.svg" alt="Logo"/>-->
                        <img src="assets/img/hoc-icon-white.svg" alt="Logo"/>
                    </a>
                </div>

                <ol>
                    <?php
                    if ($_GET['page'] == 'forside' || $_GET['page'] == "") {
                        echo "";
                    } else {
                        echo "<a href=\"index.php\" class=\"back2start\"> < Tilbage </a> ";
                    }
                    ?>

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