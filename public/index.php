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
Router::get('/',[AuthorsController::class,'listAll']);
Router::get('/add_author',[AuthorsController::class,'create']);
Router::get('/edit_author/{id}',[AuthorsController::class,'edit']);
Router::get('/remove_author/{id}/{name}',[AuthorsController::class,'remove']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::post('/update_author',[AuthorsController::class,'update']);

$system->start();