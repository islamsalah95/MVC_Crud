<?php 
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$serverLink = $protocol . "://" . $_SERVER['HTTP_HOST'] ;
define("URLApp", $serverLink . "/Mvc/src/App/");//http://localhost/Mvc/src/App/
define("URLPublic", $serverLink . "/Mvc/public/");//http://localhost/Mvc/src/App/











?>