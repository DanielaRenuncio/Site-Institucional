<?php

require __DIR__.'/../vendor/autoload.php';

use Code\Controller\PageController;

//substr vai pegar a string ignorando a primeira / que vem em REQUEST_URI
$url = substr($_SERVER['REQUEST_URI'],1);
$url = explode("/", $url);


$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';

$action = isset($url[1]) && $url[1] ? $url[1] : 'index';

//recebo o nome do controller que eu quero
$controller = "Code\Controller\\".ucfirst($controller).'Controller';
print 'controller default: ' . $controller;
print '<br> Método default: ' . $action;


$response = call_user_func_array([new $controller, $action],[]);
print $response;

//$execute = new $controller();
//print $execute->index();