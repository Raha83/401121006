<?php
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');
require_once(__DIR__.'/app/Route.php');

use Illuminate\Database\Capsule\Manager as Capsule;
$config = require __DIR__.'/config/database.php';
$capsule = new Capsule;
$capsule->addConnection($config);

$capsule->setAsGlobal();

$capsule->bootEloquent();

use App\Route;
use App\Controller\FrontController;

//method 1
$route = new Route();
$route->addRoute("GET",'/web2/401121006/',[FrontController::class, 'home']);
$route->addRoute("GET",'/web2/401121006/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/web2/401121006/infs',[FrontController::class, 'infs']);
$route->addRoute("GET",'/web2/401121006/head',[FrontController::class, 'head']);
$route->addRoute("GET",'/web2/401121006/footer',[FrontController::class, 'footer']);
$route->dispatch();

//method2
// var_dump($route);
// exit();
// $method = $_SERVER['REQUEST_METHOD'];
// $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
// // echo($method);
// // echo('<br>');
// // print_r($uri);
// if($uri == "/web2/401121006/")
// {
//     view('home.php');

// }else if($uri=='/web2/401121006/infs')
// {
//     view('infs.php');

// }else if($uri=='/web2/401121006/about')
// {
//     view('about.php');

// }
// else{
//     view('404.php');
    
// }


