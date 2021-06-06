<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\operationModel;
use App\Controllers\Controller;

class operationController extends Controller
{
    protected $modelName = operationModel::class;

    public function create()
    {
        Renderer::render('operation/create');
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($typeOperation, $montant);
        }
    }
}