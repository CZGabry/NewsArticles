<?php
declare(strict_types=1);

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

use DI\ContainerBuilder;
use SimpleMVC\Controller\Error404;
use Zend\Diactoros\ServerRequestFactory;

$builder = new ContainerBuilder();
$builder->addDefinitions('config/container.php');
$container = $builder->build();

$request = ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

// Routing
$path = $request->getUri()->getPath();
$method = $request->getMethod();

if(strpos($path, '=') == true){

	$stringPath = substr($path, strpos($path, '=') + 1);

	$path = str_replace($stringPath,"id",$path);

	$murl   = sprintf("%s %s", $method, $path);

	$routes = require 'config/route.php';
	$controllerName = $routes[$murl] ?? Error404::class;


	$controller = $container->get($controllerName);
	$controller->execute($request);

	exit();
}


$murl   = sprintf("%s %s", $method, $path);


$routes = require 'config/route.php';
$controllerName = $routes[$murl] ?? Error404::class;



$controller = $container->get($controllerName);
$controller->execute($request);


