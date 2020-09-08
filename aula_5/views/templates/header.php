<?php
header("Expires: 0");
header("Pragma: cache");
header("Cache-Control: max-age=0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/Style/Style.css">
</head>

<body>

    <header>

        <nav class="d-flex justify-content-around">
        

            <div>
                <ul>
                    <li class="nav-item dropdown list-unstyled">
                        <button class="btn nav-link dropdown-toggle" id="Menu" role="button" data-toggle="dropdown">
                            Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="#Menu">
                            <a class="dropdown-item" href="?controller=site&action=home">home</a>
                            <a class="dropdown-item" href="?controller=site&action=sobre">sobre</a>
                            <a class="dropdown-item" href="?controller=site&action=produtos">produtos</a>
                            <a class="dropdown-item" href="?controller=site&action=contatos">contatos</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div><img src="assets/images/logo.jpg" alt=""></div>
            
            <div>
                <ul>
                    <li class="nav-item dropdown list-unstyled">
                        <button class="btn nav-link dropdown-toggle" id="Clients" role="button" data-toggle="dropdown">
                            Clients
                        </button>
                        <div class="dropdown-menu" aria-labelledby="#Clients">
                            <a class="dropdown-item" href="?controller=clients&action=register">Cadastro</a>
                            <a class="dropdown-item" href="?controller=clients&action=clientList">Lista de Clientes</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="d-flex justify-content-between">
        
        <article>