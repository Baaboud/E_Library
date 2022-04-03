<?php

namespace coding\app\controllers;

use coding\app\models\Order;

class ordersController extends Controller{

    function listAll($parameters=null){
    }
    function create(){
        $this->view('add_order');
    }

    function store(){
    }
    function edit($params=[]){
    }
    function update(){
    }
    public function remove($params=[]){
    }
}
