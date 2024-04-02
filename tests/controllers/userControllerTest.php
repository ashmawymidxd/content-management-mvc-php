<?php

use ahmed\controllers\userController;
use PHPUnit\Framework\TestCase;
class userControllerTest extends TestCase{

    public function testInserIntoUserTable(){
        $user = new userController();
        $this->assertEquals('Ahmed', $user->returnAhmed('Ahmed'));
    }

    public function testLogin(){
        $user = new userController();
        $this->assertEquals('Auth/login', $user->login());
    }
        
}