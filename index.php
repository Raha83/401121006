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

$route = new Route();
$route->addRoute("GET",'/web2/',[FrontController::class, 'home']);
$route->addRoute("GET",'/web2/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/web2/infs',[FrontController::class, 'infs']);
$route->dispatch();
