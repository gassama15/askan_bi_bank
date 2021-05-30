<?php
namespace App\Controllers;

use App\Renderer;
use App\Models\UserModel;

class AuthController extends Controller
{
    protected $modelName = UserModel::class;

    public function index()
    {
        Renderer::render('admin/index');
    }

    public function login()
    {
        var_dump($_POST);
    }
}