<?php
namespace App\Models;
use PDO;
use App\Config\DB;

class ProductModel{


public static function product(){

    $statement = DB::db()->query("SELECT * FROM products");
    return  $statement->fetchAll(PDO::FETCH_ASSOC);
    
}




}




?>