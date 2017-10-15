<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files

require '../../vendor/autoload.php';

use App\SQLiteConnection;
use App\Items;



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
 
// query items
$stmt = $item->read();
 
// items array
$items_arr=array();
$items_arr["records"]=array();
  
// retrieve our table contents
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  // extract row
  // this will make $row['name'] to
  // just $name only
  extract($row);
 
  $items_item=array(
    "id" => $id,
    "name" => $name,
    "model" => $model,
    "mac_address" => $mac_address
  );
  array_push($items_arr["records"], $items_item);
}
  
echo json_encode($items_arr);
 
?>