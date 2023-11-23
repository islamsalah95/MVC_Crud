<?php
require_once dirname(__DIR__) . "\\vendor\autoload.php";
use App\Controllers\ProductController;

if (isset($_POST['create'])) {
    $prod = new ProductController();
    $output= $prod->create($_POST['create_name'], $_POST['create_price']);
}
?>