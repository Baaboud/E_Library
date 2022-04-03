<?php

namespace coding\app\controllers;

// use coding\app\models\Home;

class HomeController extends Controller{

    function index(){
        $this->view('index');
    }

    function details(){
        $this->view('details');
    }

    function checkout(){
        $this->view('checkout');
    }

    function category(){
        $this->view('category');
    }

    function dash(){
        $this->view('home');
    }
}

?>