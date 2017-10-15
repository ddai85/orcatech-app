<?php
/**
require 'vendor/autoload.php';

use App\SQLiteConnection;
 
$pdo = (new SQLiteConnection())->connect();
if ($pdo != null){
  echo json_encode(
    array('message' => 'Connected to the SQLite database successfully!')
  );
}
else {
	echo json_encode(
    array('message' => 'Whoops, could not connect to the SQLite database!')
  );
}*/