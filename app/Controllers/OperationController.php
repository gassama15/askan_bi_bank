<?php
namespace App\Controllers;

use App\Http;
use App\Renderer;
use App\Models\CompteModel;
use App\Models\OperationModel;

class OperationController extends Controller
{
    protected $modelName = OperationModel::class;
    protected $compteModel;

    public function __construct()
    {
        $this->compteModel = new CompteModel();
        parent::__construct();
    }

    public function start()
    {
        Renderer::render('operation/operation');
    }

    public function verify()
    {
        if (isset($_POST['num_compte'])) {
            $result = $this->compteModel->isValidNumber($_POST['num_compte']);
            // var_dump($result);
            // die();

            if ($result) {
                $this->session->write('idCompte', $result->idCompte);
                $this->session->write('num_compte', $result->num_compte);
                Http::redirect(
                    'index.php?controller=operationController&task=process'
                );
            }
            $this->session->setFlash('danger', 'Numéro de compte invalide');
            Renderer::render('operation/operation', [
                'num_compte' => $_POST['num_compte'],
            ]);
        }
    }

    public function process()
    {
        Renderer::render('operation/process');
    }

    public function create()
    {
        if (!empty($_POST)) {
            $idCompte = $this->session->read('idCompte');
            $idAgent = $this->session->read('auth')->idAgent;
            extract($_POST);
            if ($typeOperation == 'retrait') {
                $amountIsAvailable = $this->isAmountAvailable(
                    $montant,
                    $idCompte
                );

                if ($amountIsAvailable == true) {
                    $this->model->getPdo()->beginTransaction();
                    $this->model->insert(
                        $typeOperation,
                        $montant,
                        $idCompte,
                        $idAgent
                    );
                    $this->compteModel->decreaseAmount($montant, $idCompte);
                    $this->model->getPdo()->commit();

                    $this->session->setFlash(
                        'success',
                        'Opération réussie avec succés'
                    );
                    Http::redirect(
                        'index.php?controller=operationController&task=start'
                    );
                } else {
                    $this->session->setFlash(
                        'danger',
                        'Votre solde est inférieur au montant que vous souhaitez retirer.'
                    );
                    Renderer::render('operation/process', [
                        'montant' => $_POST['montant'],
                        'typeOperation' => 'retrait',
                    ]);
                }
            } else {
                $this->model->getPdo()->beginTransaction();
                $this->model->insert(
                    $typeOperation,
                    $montant,
                    $idCompte,
                    $idAgent
                );
                $this->compteModel->increaseAmount($montant, $idCompte);
                $this->model->getPdo()->commit();

                $this->session->setFlash(
                    'success',
                    'Opération réussie avec succés'
                );
                Http::redirect(
                    'index.php?controller=operationController&task=start'
                );
            }
        }
    }

    private function isAmountAvailable(int $montant, int $idCompte)
    {
        return $this->compteModel->getActualSolde($idCompte) > $montant;
    }
}