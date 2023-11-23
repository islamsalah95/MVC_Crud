<?php
require_once dirname(__DIR__) . "\\vendor\autoload.php";
use App\Controllers\ProductController;

if (isset($_POST['update'])) {
    $prod = new ProductController();
   $state= $prod->update($_POST['update_id'], $_POST['update_name'], $_POST['update_price']);
}


?>