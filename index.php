<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;
include_once './database/config.php';
require './vendor/autoload.php';

$app = new \Slim\App;
// Get container
$container = $app->getContainer();

// Register component on container
$container['renderer'] = new PhpRenderer("./client/dist");

$database = new Database();
$db = $database->getConnection();

// Render PHP template in route
$app->get('/', function ($request, $response, $args) {
    return $this->renderer->render($response, "index.html", $args);
});

function getTitleFromUrl($url)
{
    preg_match('/<title>(.+)<\/title>/', file_get_contents($url), $matches);
    return mb_convert_encoding($matches[1], 'UTF-8', 'UTF-8');
}

function returnResult($action, $success = true, $id = 0)
{
    echo json_encode([
        'action' => $action,
        'success' => $success,
        'id' => intval($id),
    ]);
}

//return all items in database-- if a queryId is passed, search for Id and DELETE
//delete function was not working
//sqlite PDO does not allow for variable injection on column names therefore switch statement is used
$app->get('/items', function (Request $req, Response $res) use ($db, $app) {
    $query = $req->getQueryParams();
    $delete = $query['delete'];
    $order = $query['orderBy'];

    if (!$delete){
      switch ($order) {
      	case 'id':
          $stmt = $db->query("SELECT * FROM items");
          break;
        case 'name':
          $stmt = $db->query("SELECT * FROM items ORDER BY name");
          break;
        case 'model':
          $stmt = $db->query("SELECT * FROM items ORDER BY model");
          break;
        case 'mac_address':
          $stmt = $db->query("SELECT * FROM items ORDER BY mac_address");
          break;
      }

      echo json_encode($stmt->fetchAll(PDO::FETCH_CLASS));
    } else {
    	$sql = 'DELETE FROM items ' . 'WHERE id =:id';
    	$stmt = $db->prepare($sql);
    	$stmt->bindValue(':id', $delete);
    	if ($stmt->execute()) {
        returnResult('Delete', true, $delete);
      } else {
      	returnResult('Delete', false, $delete);
      }
  
    }
});


$app->post('/items', function (Request $req, Response $res) use ($db, $app) {
	  $parsedBody = json_decode($req->getBody(), true);
    
    $name = $parsedBody["name"];
	  $model = $parsedBody["model"];
	  $mac_address = $parsedBody["mac_address"];

    try{ 
        $qry = $db->prepare("INSERT INTO items (name, model, mac_address) VALUES (?,?,?)");
    		$qry->execute(array($name, $model, $mac_address)); 
    } 
    catch(PDOException $exception){ 
    	echo json_encode($exception->getMessage()); 
    } 

    returnResult('add', $qry == true, $db->lastInsertId());

});





$app->run();