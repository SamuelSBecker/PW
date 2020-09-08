
<?php

if(!isset($_GET['controller'])){ // se url controler não está setada
    require_once('./controllers/site.php'); //requere site.php
    (new SiteController())->home(); // A classe SiteController(objeto) chama o metodo home
}else{ // senão
    switch($_REQUEST['controller']){ //swich url controler
    case 'site':    //caso site
        require_once('./controllers/site.php'); //requere site.php
        $site = new SiteController();   //Atribui a classe SiteController na variavel $site
        if(!isset($_REQUEST['action'])){ //se url action não setada
            $site->home();  // chama home
        }else{ // se não
            switch($_REQUEST['action']){ // requere url action
                case 'home':    //caso URL = home
                    $site->home();   //variavel $site chama home
                break;  //para
                case 'sobre':   //caso URL = sobre
                    $site->sobre();  // variavel $site chama sobre
                break;  //para
                case 'produtos':    //caso URL = produtos
                    $site->produtos();   //variavel $site chama produtos
                break;  //para
                case 'contatos':    //caso URL = contatos
                    $site->contatos();   //variavel $site chama contatos
                break;  //para
            }
        }
    break;  //para

    case 'clients': //caso url client
        require_once('controllers/clients.php');    //chama controladora clients
        $client = new clientsController();  //variavel client = classe clientsController
        if(!isset($_GET['action'])){    //se action não estiver setada
            $client -> index();     //variavel client chama função index()
        }else{  //se não
            switch($_REQUEST['action']){    //switch url action
                case 'register':        //caso url register
                    $client->register();    //variavel client chama função register
                break;  //para
                case 'registerView':    //caso url registerView
                    $client -> registerView();  //variavel client chama função registerView
                break;
                case 'clientList' :     //caso url clientList
                    $client -> clientList();    //variavel client chama função clientList
                break;
            }
        }
    break;
    }
}
?>
   