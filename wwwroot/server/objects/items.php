<?php
 namespace App;
 
 class Items{
  
    // database connection and table name
    private $myDB;
    private $table_name = "items";
  
    // object properties
    public $id;
    public $name;
    public $model;
    public $mac_address;
  
    // constructor with $db as database connection
    public function __construct($db){
 
    $this->myDB = $db;
  }
 
  // read items
  function read(){

    $stmt = $this->myDB->query('SELECT * FROM items');

    return $stmt;
  }
}