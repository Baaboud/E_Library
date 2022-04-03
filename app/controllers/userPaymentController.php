<?php

namespace coding\app\controllers;

use coding\app\models\Payment;

class UserPaymentsController extends Controller{

    function listAll($parameters=null){
    }
    function create(){
        $this->view('add_payment');
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
