<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\AgentModel;
use App\Models\AgenceModel;

class AgentController extends Controller
{
    protected $modelName = AgentModel::class;
    protected $agenceModel = AgenceModel::class;
    protected $agentModel = AgentModel::class;


    public function create()
    {
        $this->agenceModel = new $this->agenceModel();
        $agences = $this->agenceModel->findAll();
        // var_dump($agences);
        Renderer::render('agent/create', compact('agences'));
    }
    public function listeage()
    {
        $this->agentModel = new $this->agentModel();
        $agents = $this->agentModel->findAll();
    // var_dump($agents);
        Renderer::render('agent/create', compact('agents'));
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