<?php

class indexController {

    public function __construct(){

    }

    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/layouts/navbar.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    
}