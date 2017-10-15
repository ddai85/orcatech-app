<?php
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

    $stmt = $this->myDB->prepare('SELECT * FROM items;');
 
    $stmt->execute();
 
        // for storing tasks
    return $stmt;

    // select all query
    // $query = "SELECT
    //             c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
    //         FROM
    //             " . $this->table_name . " p
    //             LEFT JOIN
    //                 categories c
    //                     ON p.category_id = c.id
    //         ORDER BY
    //             p.created DESC";
 
    // // prepare query statement
    // $stmt = $this->conn->prepare($query);
 
    // // execute query
    // $stmt->execute();
 
    // return $stmt;
  }
}