<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

require './vendor/autoload.php';

$app = new \Slim\App;
$db = new PDO('sqlite:./database/api_db.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

//return all items in database-- if a queryId is passed, search for Id and delete
$app->get('/items', function (Request $req, Response $res) use ($db, $app) {
    $query = $req->getUri()->getQuery();

    if (!$query){
      $stmt = $db->query('SELECT * FROM items;');
      echo json_encode($stmt->fetchAll(PDO::FETCH_CLASS));
    } else {
    	$sql = 'DELETE FROM items ' . 'WHERE id =:id';
    	$stmt = $db->prepare($sql);
    	$stmt->bindValue(':id', $query);
    	if ($stmt->execute()) {
        returnResult('Delete', true, $query);
      } else {
      	returnResult('Delete', false, $query);
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