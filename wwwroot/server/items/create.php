<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 

require '../../vendor/autoload.php';
use App\SQLiteConnection;
use App\Items;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$pdo = (new SQLiteConnection())->connect();
if ($pdo != null){
  // echo json_encode(
  //   array('message' => 'Connected to the SQLite database successfully!')
  // );
}
else {
  echo json_encode(
    array('message' => 'Whoops, could not connect to the SQLite database!')
  );
}
  
// initialize object
$item = new Items($pdo);

 
// get posted data
$data = json_decode(file_get_contents("php://input"));

  echo json_encode(
    array('message' => $data)
  );
 
// // set product property values
$item->name = $data->name;
$item->model = $data->model;
$item->mac_address = $data->mac_address;

 
// create the product
if($item->create()){
    echo '{';
        echo '"message": "Product was created."';
    echo '}';
}
 
// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to create product."';
    echo '}';
}
?>