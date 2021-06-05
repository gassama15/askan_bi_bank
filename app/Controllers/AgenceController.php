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
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        Renderer::render('agence/create');
    }

    public function add()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($nom, $adresse, $email, $tel);
            $this->session->setFlash('success', 'Agence créée avec succés');
            Http::redirect('index.php?controller=agenceController&task=index');
        }
    }

    public function index()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        $agences = $this->model->findAll('idAgence DESC');

        Renderer::render('agence/index', compact('agences'));
    }

    public function edit()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        if (isset($_GET['id'])) {
            $agence = $this->model->find($_GET['id']);

            Renderer::render('agence/edit', compact('agence'));
        }
    }

    public function update()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->edit($nom, $adresse, $email, $tel, $idAgence);
            $this->session->setFlash('success', 'Agence modifiée avec succés');
            Http::redirect('index.php?controller=agenceController&task=index');
        }
    }

    public function delete()
    {
        if (is_null($this->session->read('auth'))) {
            $this->session->setFlash('danger', 'Veuillez vous authentifier');
            Http::redirect('index.php?controller=authController&task=index');
        }
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
            $this->session->setFlash('success', 'Agence supprimée avec succés');
            Http::redirect('index.php?controller=agenceController&task=index');
        }
    }
}