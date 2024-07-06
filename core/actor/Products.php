<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/montera/app/config/config.php');
include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
new Import('folder');

class Products{
    private $id;
    private $modelName;
    private $brandName;
    private $price;
    private $filePath;

    //constructor
    public function __construct($modelName, $brandName, $price, $file){
        $this->id = $id = md5(uniqid('', true));
        $this->modelName = $modelName;
        $this->brandName = $brandName;
        $this->price = $price;
        $this->filePath = uploadFile($file, $id);
    }

    //getter setter
    public function getId(){
        return $this->id;
    }

    public function getModelName(){
        return $this->modelName;
    }

    public function setModelName($modelName){
        $this->modelName = $modelName;
    }

    public function getBrandName(){
        return $this->brandName;
    }

    public function setBrandName($brandName){
        $this->brandName = $brandName;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getFilePath(){
        return $this->filePath;
    }

    public function setFilePath($file){
        $this->filePath = uploadFile($file, $this->id);
    }

    //get array object php
    public function getArrayObject(){
        $arr = array(
            'id' => $this->id,
            'modelName' => $this->modelName,
            'brandName' => $this->brandName,
            'price' => $this->price,
            'filePath' => $this->filePath
        );
        return $arr;
    }
    
}

?>