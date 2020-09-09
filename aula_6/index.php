<?php

if(!isset($GET['controller'])){         //se controlador não estiver setada

    require_once('./controllers/mainController.php');     //requere controladora
    (new siteController()) -> home();           // classe siteController aponta home

}else{                                  //se tiver setada

    switch($_REQUEST['controller']){       //switch de controladoras

        case 'site':                        //controladora site

            require_once('./controllers/mainController.php');     //requere controladora
            $site = new siteController();               //variavel site = classe siteController

            if(!isset($GET['action'])){                 // se action não estiver setada
                $site -> home();                        //variavel site aponta home
            }else{
                switch($_REQUEST['action']){            // paginas controladora
                    case 'home':                        //home
                        $site -> home();                //variavel site aponta home
                    break;
                }
            }

    }
}

?>