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


$app->get('/items', function () use ($db, $app) {
    $sth = $db->query('SELECT * FROM items;');
    echo json_encode($sth->fetchAll(PDO::FETCH_CLASS));
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