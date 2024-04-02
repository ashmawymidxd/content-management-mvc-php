<?php

namespace ahmed\controllers;

use ahmed\core\controller;
session_start();

class baseController extends controller{

    public function index(){
        return $this->view('index');
    }
    
}