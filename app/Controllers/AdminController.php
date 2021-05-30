<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\AdminModel;

class AdminController extends Controller
{
    protected $modelName = AdminModel::class;

    public function index()
    {
        Renderer::render('admin/index');
    }

    public function show()
    {
        var_dump($_POST);
    }
}