<?php

namespace App\Controllers;

use Core\View;
use App\Models\Veiculo;

class ContatosController {
    
    public function __construct() 
    {
    }

    public function index()
    {
        View::go('contatos/index');
    }

}