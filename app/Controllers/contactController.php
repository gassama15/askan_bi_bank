<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\contactModel;


class contactController extends Controller
{
    protected $modelName = contactModel::class;
    protected $contactModel = contactModel::class;
    


    public function create()
    {
        $this->contactModel = new $this->contactModel();
        $contact = $this->contactModel->findAll();
        // var_dump($agences);
        Renderer::render('contact/create', compact('contact'));
    }  
    
    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);

            $this->model->insert(
                $nom,
                $email,
                $tel,
                $sitweb,
                $message,
                
             );
        }
    }
}