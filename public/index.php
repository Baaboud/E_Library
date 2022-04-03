<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
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
Router::get('/',[UsersController::class,'listAll']);
Router::get('/add_user',[UsersController::class,'create']);
Router::get('/edit_user/{id}',[UsersController::class,'edit']);
Router::get('/remove_user/{id}/{name}',[UsersController::class,'remove']);
Router::post('/save_user',[UsersController::class,'store']);
Router::post('/update_user',[UsersController::class,'update']);

$system->start();