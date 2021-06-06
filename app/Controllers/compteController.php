<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\compteModel;
use App\Controllers\Controller;

class compteController extends Controller
{
    protected $modelName = compteModel::class;

    public function create()
    {
        Renderer::render('compte/create');
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($nom, $adresse);
        }
    }
}