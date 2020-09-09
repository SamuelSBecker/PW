<?php

class siteController{

    public function home(){
        require_once('./views/templates/header.php');
        require_once('./views/pages/home.php');
        require_once('./views/templates/footer.php');
    }
}

?>