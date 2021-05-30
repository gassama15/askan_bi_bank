<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\AgentModel;
use App\Models\AgenceModel;
use App\Controllers\Controller;

class AgentController extends Controller
{
    protected $modelName = AgentModel::class;
    protected $agenceModel = AgenceModel::class;

    public function create()
    {
        $this->agenceModel = new $this->agenceModel();
        $agences = $this->agenceModel->findAll();
        // var_dump($agences);
        Renderer::render('agent/create', compact('agences'));
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);

            $this->model->insert(
                $num_agent,
                $nom,
                $prenom,
                $role,
                $idAgence,
                $login,
                $password
            );
        }
    }
}