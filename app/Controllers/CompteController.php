<?php
namespace App\Controllers;

use App\Http;
use App\Renderer;
use App\Models\CompteModel;

class CompteController extends Controller
{
    protected $modelName = CompteModel::class;

    public function start()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        Renderer::render('compte/form');
    }

    public function amount()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        if (isset($_POST['num_compte'])) {
            $result = $this->model->isValidNumber($_POST['num_compte']);

            if ($result) {
                $amount = $this->model->getActualSolde($result->idCompte);
                $amount = $this->formateNumber($amount);
                $this->session->setFlash(
                    'success',
                    "Votre solde est de $amount F CFA"
                );
                Http::redirect(
                    'index.php?controller=compteController&task=start'
                );
            }
            $this->session->setFlash('danger', 'Numéro de compte invalide');
            Renderer::render('compte/form', [
                'num_compte' => $_POST['num_compte'],
            ]);
        }
    }
}