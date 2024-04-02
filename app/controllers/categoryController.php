<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\models\Categories;
use ahmed\core\helper;
use GUMP;
session_start();

class categoryController extends controller{

    public function index(){
        $category = new Categories();
        $categorys = $category->getCategories();
        return $this->view('Dashboard/category/index', ['categorys' => $categorys]);

        // echo json_encode($_SESSION['user'][0]['id']);
    }

    public function create(){
        return $this->view('Dashboard/category/create');
    }

    public function store(){
        if(isset($_SESSION['user'])){
            $is_valid = GUMP::is_valid(array_merge($_POST, $_FILES), [
                'name'       => 'required|between_len,4;100',
                'description'       => 'required|between_len,4;100',
            ]);
            
            if ($is_valid === true) {
                $category = new Categories();
                $category->insertCategory($_POST);
                helper::redirect('category/index');
            } else {
                // var_dump($is_valid);
                $_SESSION['error'] = $is_valid;
                helper::redirect('category/create');
            }

        }
        
    }

    public function edit($id){
        $category = new Categories();
        $sql = "SELECT * FROM categories WHERE id = $id";
        $category = $category->sqlQuery($sql);
        return $this->view('Dashboard/category/edit', ['category' => $category]);
    }

    public function updateCategory(){
        $category = new Categories();

        $category->upgradeCategory($_POST);
        helper::redirect('category/index');
    }
    

    public function destroy($id){
        $category = new Categories();
        $category->deleteCategory($id);
        helper::redirect('category/index');
    }

}