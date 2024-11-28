<?php
error_reporting(E_ALL);
// $functions = basename($_SERVER['PHP_SELF']); 
$baseUrl = "https://hoisolution.com/dougbrownlaw/";
$functions = basename($_SERVER['PHP_SELF']); // Get just the filename
switch ($functions) {
    case "index.php";
        $url = $baseUrl;
        $title_name = "Douglas D Brown";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "about.php";
        $url = $baseUrl . "about";
        $title_name = "About Us | Douglas D Brown";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "practice-areas.php";
        $url = $baseUrl . "practice-areas";
        $title_name = "Practice Areas | Douglas D Brown";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "blog.php";
        $url = $baseUrl . "blog";
        $title_name = "Blogs | Douglas D Brown";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "blog-single.php";
        $url = $baseUrl . "blog";
        $title_name = "Blogs Details | Douglas D Brown";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "contact.php";
        $url = $baseUrl . "contact";
        $title_name = "Contact Us | Douglas D Brown";
        $description = "";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;

}

$favIcon = 'https://hoisolution.com/dougbrownlaw/assets/imgs/favicon.png';
