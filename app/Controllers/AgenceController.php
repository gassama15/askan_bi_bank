<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\AgenceModel;

class AgenceController extends Controller
{
    protected $modelName = AgenceModel::class;

    public function create()
    {
        Renderer::render('agence/create');
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($nom, $adresse, $email, $tel);
        }
    }
}