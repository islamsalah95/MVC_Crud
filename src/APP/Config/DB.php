<?php 
namespace App\Config;
use App\Config\DatabaseConfig;

class DB{
public static function db(){

$dbConnection = DatabaseConfig::getInstance();
return  $dbConnection->getConnection();

    }
}








?>