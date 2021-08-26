<?php

namespace App\controllers;

use App\app\repository\DevedorRepository;
use App\app\usecase\DevedorUsecase;
use App\entities\Devedor;

class DevedorControllers
{


    protected $usecase;

    public function __construct()
    {
        $this->usecase = new DevedorUsecase(new DevedorRepository);
    }
    public function index()
    {
        $this->usecase->ShowAllDevedor();
    }

    public function request(Devedor $devedor){
        $this->usecase->AddDevedor($devedor);
    }

    public function update(Devedor $devedor, int $id)
    {
        $this->usecase->UpdateDevedor($devedor,$id);
    }

    public function delete(int $id)
    {
        $this->usecase->DeleteDevedor($id);
    }
}
