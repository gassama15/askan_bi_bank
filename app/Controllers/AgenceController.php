<?php
namespace App\Controllers;

use App\Http;
use App\Renderer;
use App\Models\AgenceModel;

class AgenceController extends Controller
{
    protected $modelName = AgenceModel::class;

    public function create()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
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