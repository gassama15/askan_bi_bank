<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\typecompteModel;
use App\Controllers\Controller;

class ClientController extends Controller
{
    protected $modelName = typecompteModel::class;

    public function create()
    {
        Renderer::render('typecompte/create');
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($codeType,$libelleType);
            
        }
    }