<?php

require __DIR__.'/../vendor/autoload.php';

//substr vai pegar a string ignorando a primeira / que vem em REQUEST_URI
$url = substr($_SERVER['REQUEST_URI'],1);
$url = explode("/", $url);


$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
print_r($controller);