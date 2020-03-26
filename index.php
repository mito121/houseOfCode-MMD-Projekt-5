<?php

require_once "includes/header.php";

$page = '';

$page = (isset($_GET['page'])) ? "pages/" . $_GET['page'] . '.php' : 'pages/home.php';

if (file_exists($page)) {
    include_once( $page );
} else {
    include_once 'pages/error404.php';
}

require_once 'includes/footer.php';