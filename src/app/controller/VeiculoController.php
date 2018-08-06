<?php

namespace App\Controller;

use Core\View;
use App\Model\Veiculo;

class VeiculoController {
    
    public function __construct() 
    {
        //echo 'VeiculoController teste';
    }

    public function index()
    {
        $veiculos = Veiculo::getAll();

        View::go('index', compact('veiculos'));
    }

    public function go()
    {
        View::go('go');
    }
}