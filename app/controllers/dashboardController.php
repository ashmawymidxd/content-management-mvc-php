<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\models\Categories;
session_start();

class dashboardController extends controller{

    // select count of category
    public function getContCategory(){
        $categories = new Categories;
        $count = $categories->countCategory('SELECT COUNT(*) as count FROM categories');
        return ($count[0]['count']);
    }

    public function index(){
        return $this->view('Dashboard/dashboard', ['categoryCount' => $this->getContCategory()]);
    }
    
}