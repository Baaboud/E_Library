<?php

namespace coding\app\controllers;

use coding\app\models\City;

class CitiesController extends Controller{

    function listAll($parameters=null){

        $parameters['status'];
        $cities=new City();
        $allCities=$cities->getAll();
        //print_r($allCities);

        $this->view('list_cities',$allCities);

    }
    function create(){
        $this->view('add_city');
    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $city=new City();
        
        $city->name=$_POST['city_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $city->image=$imageName!=null?$imageName:"default.png";
        $city->created_by=1;
        $city->is_active=$_POST['is_active'];

        $city->save();

    }
    function edit($params=[]){

        $cat=new City();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_city',$result);
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