<?php

namespace App\Model;

class Contato
{

    protected $table = 'contatos';

    protected static $connection;

    public function __construct()
    {

    }

    public static function getAll()
    {
        $connection = new \PDO('mysql:host=127.0.0.1;dbname=exemplo_bd', 'root', 'root');
        $sql = "SELECT * FROM contatos";
        $consulta = $connection->prepare($sql);
        $resultado = $consulta->execute();

        return $consulta->fetchAll(\PDO::FETCH_OBJ);

    }

}