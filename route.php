<?php
require_once 'vendor/autoload.php';
//use App\classes\Blog;

if (isset($_GET['page'])){
    if ($_GET['page'] == 'home'){
        include 'pages/home.php';
    }
}

