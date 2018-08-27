<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Veiculo;

class VeiculoController {
    
    public function __construct() 
    {
        //echo 'VeiculoController teste';
    }

    public function index()
    {
//        $veiculos = Veiculo::getAll();
//
//        View::go('index', compact('veiculos'));
    }

    public function go()
    {
//        View::go('go');
    }
}