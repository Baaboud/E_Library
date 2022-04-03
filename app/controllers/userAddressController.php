<?php

namespace coding\app\controllers;

use coding\app\models\Payment;

class UserAddressController extends Controller{

    function listAll($parameters=null){
    }
    function create(){
        $this->view('add_address');
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
