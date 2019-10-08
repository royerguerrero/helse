<?php

class indexController {

    public function __construct(){
        //Security::verifyUser();
    }

    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/layouts/navbar.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function login(){
        require_once 'views/layouts/header.php';
        require_once 'views/layouts/navbar.php';
        require_once 'views/index/login.php';
        require_once 'views/layouts/footer.php';
      }
    
    
    public function singup(){
        require_once 'views/layouts/header.php';
        require_once 'views/layouts/navbar.php';
        require_once 'views/index/singup.php';
        require_once 'views/layouts/footer.php';
    }
    
    
}