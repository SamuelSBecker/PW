<?php
class clientsController{

    public function index(){

    }

    public function register(){

        require_once('views/templates/header.php');
        require_once('views/clients/register.php');
        require_once('views/templates/footer.php');
    }

    public function registerView(){

        $clients = array(
        'name' => $_POST['name'], 
        'email' => $_POST['email'], 
        'interest' => $_POST['interest'],
        'phone' => $_POST['phone']);

        require_once('views/templates/header.php');
        require_once('views/clients/registerView.php');
        require_once('views/templates/footer.php');
    }

    public function clientList(){

        require_once("models/clientsModel.php");
        $client = new clientModel();
        $result = $client -> clientList();

        require_once('views/templates/header.php');
        require_once('views/clients/clientList.php');
        require_once('views/templates/footer.php');
    }

    
}
?>