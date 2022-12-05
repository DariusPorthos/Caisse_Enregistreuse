<?php

class Model {
    private $bd;
    private static $instance = null;

    private function __construct(){
        $this->bd = new PDO("pgsql:host=localhost;dbname=site", "site", "test");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET charset Utf8");
    }

    public function getModel(){
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }



}

?>