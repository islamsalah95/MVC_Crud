<?php 
namespace App\Config;
require_once(dirname(__DIR__) ."\\Config\\Connection.php");
require_once(dirname(__DIR__) ."\\Config\\Global.php");

use PDO;
use Exception;
class DatabaseConfig {
    private static $instance;
    private $connection;

    private function __construct() {
        try {
     $this->connection = new PDO( "mysql:host=" . HOST . ";dbname=" . DBNAME , USERNAME, PASSWORD);
     
        } catch (Exception $e) {
            header("Location: "  . URLApp . "Viewes/error.php");
            echo "Connection failed: " . $e->getMessage();
        }
    }
    

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    // Prevent cloning of the instance
    private function __clone() {}

    // Prevent unserializing of the instance
    public function __wakeup() {}
    }

