<?php
  class homeController extends Home{
    public function __construct(){
      Security::verifyUser();
    }
    public function index(){
        //verificar que sea adinistrador o usuario regular
        require_once 'views/layouts/header.php';
        require_once 'views/Users/navbar.php';
        require_once 'views/Citas/agendar.php';
        require_once 'views/layouts/footer.php';
    }
    public function store()
    {
        parent::create($_POST) ? header('Location: ?controller=post') : 'Error';        
    }
    public function edit(){
        $post = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/navbar-user.php';
        require_once 'views/post/edit.php';
        require_once 'views/layouts/footer.php';
    }
    public function update_post(){
        if(isset($_FILES)) {
            $dir = "assets/img-post/" . $_FILES['file-post']['name'];
            move_uploaded_file($_FILES["file-post"]["tmp_name"], $dir);
            $_POST['img-post'] = $dir;
        }
        parent::update($_POST) ? header('Location: ?controller=post') : 'Error Apply Changes';
    }
    public function delete(){
        parent::delete_post($_GET['id']) ? header('Location:  ?controller=post') : "Eror Delete" ;
    }
  }