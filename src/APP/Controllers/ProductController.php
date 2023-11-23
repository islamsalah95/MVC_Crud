<?php
namespace App\Controllers;

use Exception;
use App\Config\DB;
use App\Models\ProductModel;

class ProductController {

    public function index(){
  
      $products= ProductModel::product();
     return $products;

    }


    public function create($name,$price) {
      try {
          $statement = DB::db()->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
  
          // Assuming you want to insert 'islam' into 'product_name' and 20066 into 'price'

  
          $statement->bindParam(':name', $name);
          $statement->bindParam(':price', $price);
          $statement->execute();
  
          return ['id'=>99,'name'=>$name,'price'=>$price ,'created_at'=> "666"] ;

        } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      }
  }
  


  public function update($id, $name, $price) {
    try {
        $statement = DB::db()->prepare("UPDATE products SET name = :name, price = :price WHERE id = :id");

        $statement->bindParam(':name', $name);
        $statement->bindParam(':price', $price);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement ;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

public function delete($id) {
    try {
        $statement = DB::db()->prepare("DELETE FROM products WHERE id = :id");

        $statement->bindParam(':id', $id);
        $statement->execute();

        echo "Product deleted successfully";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

}

?>