<?php
require_once("database/Connection.php");

class ClientModel{
    public $conn;
    function __construct()
    {
        $this -> conn = (new Connection()) -> create();
    }
    public function clientList(){
        $SQL = "SELECT * FROM clients";
        $STMT = $this -> conn -> prepare($SQL);
        $STMT -> execute();

        return $STMT -> fetchAll();
    }
}
