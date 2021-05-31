<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\TypeCompteModel;

class TypeCompteController extends Controller
{
    protected $modelName = TypeCompteModel::class;
    private $code;

    public function __construct()
    {
        $this->code = uniqid();
        parent::__construct();
    }

    public function create()
    {
        $code = $this->code;
        Renderer::render('client/typecompte', compact('code'));
    }

    public function add()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $this->model->insert($codeType, $libelle);
        }
    }
}