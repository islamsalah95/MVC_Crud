<?php
require_once dirname(__DIR__) . "\\vendor\autoload.php";
use App\Controllers\ProductController;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $prod = new ProductController();
    $prod->delete($_POST['delete_id']);
    header("Location: index.php");
}

?>