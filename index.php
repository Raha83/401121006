<?php
define('ROOT_PATH',__DIR__);
require __DIR__.'/401121006/vendor/autoload.php';
require_once(__DIR__.'/401121006/helper/functions.php');
// require_once(__DIR__.'/app/Route.php');

use Illuminate\Database\Capsule\Manager as Capsule;
$config = require __DIR__.'/401121006/config/database.php';
$capsule = new Capsule;
$capsule->addConnection($config);

$capsule->setAsGlobal();

$capsule->bootEloquent();

use App\Route;
use App\Controller\FrontController;

$route = new Route();
$route->addRoute("GET",'/web2/401121006/',[FrontController::class, 'home']);
$route->addRoute("GET",'/web2/401121006/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/web2/401121006/infs',[FrontController::class, 'infs']);
$route->dispatch();
