
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

    case 'clients':
        require_once('controllers/clients.php');
        $client = new clientsController();
        if(!isset($_GET['action'])){
            $client -> index();
        }else{
            switch($_REQUEST['action']){
                case 'register':    
                    $client->register();   
                break;
                case 'registerView':
                    $client -> registerView();
                break;
                case 'clientList' :
                    $client -> clientList();
                break;
            }
        }
    break;
    }
}
?>
   