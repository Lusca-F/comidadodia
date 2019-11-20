<?php 
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
        self::$instance =new PDO('mysql:host=localhost;dbname=blog', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
  }
?>