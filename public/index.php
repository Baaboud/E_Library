<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\CitiesController;
use coding\app\controllers\HomeController;
use coding\app\controllers\OffersController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */
Router::get('/',[CitiesController::class,'listAll']);
Router::get('/add_city',[CitiesController::class,'create']);
Router::get('/edit_city/{id}',[CitiesController::class,'edit']);
Router::get('/remove_city/{id}/{name}',[CitiesController::class,'remove']);
Router::post('/save_city',[CitiesController::class,'store']);
Router::post('/update_city',[CitiesController::class,'update']);

$system->start();