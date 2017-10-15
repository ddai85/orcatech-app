<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/items.php';
 
$db = $myDB;
 
// initialize object
$item = new Items($db);
 
// query items
$stmt = $item->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // items array
    $items_arr=array();
    $items_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
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
}
 
else{
    echo json_encode(
        array("message" => "No items found.")
    );
}
?>