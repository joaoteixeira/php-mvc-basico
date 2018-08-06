<?php

namespace App\Model;

class Veiculo {

    protected $table = 'veiculos';

    protected static $connection;

    public function __construct() 
    {
        
    }

    public static function getAll()
    {
        $connection = new \PDO('mysql:host=127.0.0.1;dbname=lojaveiculos', 'root', 'root');
        $sql = "SELECT * FROM veiculos";
        $consulta = $connection->prepare($sql);
        $resultado = $consulta->execute();

        return $consulta->fetchAll(\PDO::FETCH_OBJ);

    }

}