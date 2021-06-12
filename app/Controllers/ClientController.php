<?php
namespace App\Controllers;

use App\Http;
use App\Renderer;
use App\Models\AgentModel;
use App\Models\AgenceModel;
use App\Models\ClientModel;
use App\Models\CompteModel;
use App\Models\TypeCompteModel;

class ClientController extends Controller
{
    protected $modelName = ClientModel::class;
    protected $compteModel;
    protected $agentModel;
    protected $agenceModel;
    protected $typeCompteModel;

    public function __construct()
    {
        $this->compteModel = new CompteModel();
        $this->agentModel = new AgentModel();
        $this->agenceModel = new AgenceModel();
        $this->typeCompteModel = new TypeCompteModel();
        parent::__construct();
    }

    public function create()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }

        $agences = $this->agenceModel->findAll();
        $agents = $this->agentModel->findAll();
        $comptes = $this->typeCompteModel->findAll();
        Renderer::render(
            'client/create-compte',
            compact('agences', 'agents', 'comptes')
        );
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->getPdo()->beginTransaction();
            $this->model->insert(
                $nom,
                $prenom,
                $adresse,
                $tel,
                $cni,
                $email,
                $typeClient
            );
            $idClient = $this->model->getPdo()->lastInsertId();
            $num_compte = uniqid('cpte_');
            $this->compteModel->insert(
                $solde,
                $idClient,
                $idAgence,
                $idAgent,
                $idtypeCompte,
                $num_compte
            );

            $this->model->getPdo()->commit();
        }

        Http::redirect('index.php?controller=clientController&task=create');
    }

    public function index()
    {
        $clients = $this->model->findAllWithAccount('idClient DESC');
        foreach ($clients as $k => $v) {
            $clients[$k]->date_ouverture = $this->formateDate(
                $v->date_ouverture
            );
            // if ($k == 'date_ouverture') {
            //     $clients[$k]->date_ouverture = $this->formateDate(
            //         $v->date_ouverture
            //     );
            // }
        }
        Renderer::render('client/index', compact('clients'));
    }

    public function show()
    {
        if (isset($_GET['id'])) {
            $client = $this->model->findSingleClientWithAccount($_GET['id']);
            // var_dump($client);
            // die();

            $client->date_ouverture = $this->formateDate(
                $client->date_ouverture
            );
            $client->solde = $this->formateNumber($client->solde);

            $typeCompte = $this->typeCompteModel->findCompteWithTypeCompte(
                $client->idtypeCompte
            );

            // var_dump($typeCompte);
            // die();

            $client->libelleType = $typeCompte->libelleType;

            Renderer::render('client/show', compact('client'));
        }
    }
}