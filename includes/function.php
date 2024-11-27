<?php
error_reporting(E_ALL);
// $functions = basename($_SERVER['PHP_SELF']); 
$baseUrl = "https://localhost/company-projects/dougbrown/";
$functions = basename($_SERVER['PHP_SELF']); // Get just the filename
switch ($functions) {
    case "index.php";
        $url = $baseUrl;
        $title_name = "Doug Brown Law";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "about-us.php";
        $url = $baseUrl . "about-us";
        $title_name = "About Us | Doug Brown Law";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;

}

$favIcon = 'https://localhost/company-projects/dougbrown/assets/imgs/favicon.png';
