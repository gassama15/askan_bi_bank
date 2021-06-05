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
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
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
}