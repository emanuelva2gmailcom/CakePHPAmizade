<?php 

namespace App\Controller;

use App\Controller\AppController;

class TesteController extends AppController 
{
    public function index()
    {
        $usuario = "amigo";
        $this->set(['usuarios' => $usuario]);
    }
}
