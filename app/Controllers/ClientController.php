<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\clientModel;
use App\Controllers\Controller;

class ClientController extends Controller
{
    protected $modelName = clientModel::class;

    public function create()
    {
        Renderer::render('client/create');
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($nom, $prenom,$adresse,$tel,$cni, $email, $login,$password,$typeclient);
        }
    }
}