<?php
namespace App\Controllers;

use App\Http;
use App\Renderer;
use App\Models\AgentModel;
use App\Models\AgenceModel;

class AgentController extends Controller
{
    protected $modelName = AgentModel::class;
    protected $agenceModel = AgenceModel::class;

    public function __construct()
    {
        $this->agenceModel = new $this->agenceModel();
        parent::__construct();
    }

    public function create()
    {
       
        // $this->agenceModel = new $this->agenceModel();
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
            $this->session->setFlash('success', 'Agent créé avec succés');
            Http::redirect('index.php?controller=agentController&task=index');
        }
    }

    public function index()
    {
        
        // $this->agenceModel = new $this->agenceModel();
        $agents = $this->model->findAll('idAgent DESC');

        foreach ($agents as $key => $value) {
            $agents[$key]->nom_agence = $this->agenceModel->find(
                $value->idAgence
            )->nom;
        }

        Renderer::render('agent/index', compact('agents'));
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $agent = $this->model->find($_GET['id']);
            $agences = $this->agenceModel->findAll();
            Renderer::render('agent/edit', compact('agent', 'agences'));
        }
    }

    public function update()
    {
        if (!empty($_POST)) {
            extract($_POST);

            $this->model->edit(
                $num_agent,
                $nom,
                $prenom,
                $role,
                $idAgence,
                $login,
                $password,
                $idAgent
            );

            $this->session->setFlash('success', 'Agent modifié avec succés');
            Http::redirect('index.php?controller=agentController&task=index');
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
            $this->session->setFlash('success', 'Agent supprimé avec succés');
            Http::redirect('index.php?controller=agentController&task=index');
        }
    }
}