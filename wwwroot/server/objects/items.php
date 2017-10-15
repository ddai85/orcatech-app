<?php
 namespace App;
 
 class Items{
  
    // database connection and table name
    private $myDB;
    private $table_name = "items";
  
    // object properties
    public $id;
    public $name = 'dan';
    public $model = 'super soaker';
    public $mac_address = '111111';
  
    // constructor with $db as database connection
    public function __construct($db){
 
    $this->myDB = $db;
  }
 
  // read items
  function read(){
    $query = "SELECT * FROM " . $this->table_name;

    $stmt = $this->myDB->query($query);

    return $stmt;
  }

  // create item
  function create(){
 

    // query to insert record
    $query = "INSERT INTO " . $this->table_name . " SET name=:name, model=:model, mac_address=:address";
    echo json_encode(
      array('message' => $query)
    );

    // prepare query
    if (!$stmt = $this->myDB->prepare($query)) {
    echo json_encode(
      array('message' => 'failed')
    );

    };
  
    // //bind values
    $stmt->bindParam(":name", $this->name, PDO::PARAM_STR);
    $stmt->bindParam(":model", $this->model, PDO::PARAM_STR);
    $stmt->bindParam(":mac_address", $this->mac_address, PDO::PARAM_STR);
    //sanitize
    // $this->name=htmlspecialchars(strip_tags($this->name));
    // $this->model=htmlspecialchars(strip_tags($this->model));
    // $this->mac_address=htmlspecialchars(strip_tags($this->mac_address));
 
 
    //execute query
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
  }
}