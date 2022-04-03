<?php

namespace coding\app\controllers;

use coding\app\models\Publisher;

class PublishersController extends Controller{

    function listAll($parameters=null){

        $parameters['status'];
        $publishers=new Publisher();
        $allPublishers=$publishers->getAll();
        //print_r($allPublishers);

        $this->view('list_publishers',$allPublishers);

    }
    function create(){
        $this->view('add_publisher');
    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $publisher=new Publisher();
        
        $publisher->name=$_POST['publisher_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $publisher->image=$imageName!=null?$imageName:"default.png";
        $publisher->created_by=1;
        $publisher->is_active=$_POST['is_active'];

        $publisher->save();

    }
    function edit($params=[]){

        $cat=new Publisher();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_publisher',$result);
    }
    function update(){

    }
    public function remove($params=[]){
        echo "remove function";
    }

    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }
}

?>