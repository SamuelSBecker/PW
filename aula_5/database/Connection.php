<?php

class Connection    //classe connection
{
    private static $conn;   // variavel estática $conn

    public function create()    // função create
    {
        try {   //tenta erro
            self::$conn = new PDO('mysql:host=localhost;dbname=pw_exemple', 'root');   //conecção BD
        } catch (PDOException $err) {   //se der erro
            die("Erro: <code>" . $err->getMessage() . "<code>");
        }
        return self::$conn; //retorna conecção
    }

    public function disconnect()
    {
        $this->conn = null;
    }

    public function getConn()
    {
        return self::$conn;
    }
}