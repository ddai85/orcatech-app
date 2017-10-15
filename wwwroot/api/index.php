<?php
require '../Slim/Slim.php';
SlimSlim::registerAutoloader();
$app = new SlimSlim();

$app->get('/', function () { //as closure
    echo 'Hello World';
});

$app->get('/hello/:name', 'helloName'); //classic php style with function name

function helloName($name) {
    echo "Hello $name";
}

$app->run();