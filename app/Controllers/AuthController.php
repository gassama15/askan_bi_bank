<?php
namespace App\Controllers;

use App\Http;
use App\Renderer;
use App\Models\UserModel;

class AuthController extends Controller
{
    protected $modelName = UserModel::class;
    protected $options = [
        'restriction_msg' => "Vous n'avez pas le droit d'accéder à cette page",
    ];

    public function __construct($options = [])
    {
        $this->options = array_merge($this->options, $options);
        parent::__construct();
    }

    public function restrict()
    {
        if (!$this->session->read('auth')) {
            $this->session->setFlash(
                'danger',
                $this->options['restriction_msg']
            );
            Http::redirect('index.php?controller=authController&task=index');
            exit();
        }
    }

    public function user()
    {
        if (!$this->session->read('auth')) {
            return false;
        }
        return $this->session->read('auth');
    }

    public function connect($user)
    {
        $this->session->write('auth', $user);
    }

    public function index()
    {
        Renderer::render('auth/login');
    }

    public function login()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $user = $this->model->findByLoginAndPassword($login, $password);
            $this->connect($user);
            $this->session->setFlash(
                'success',
                'Dalal ak diam si askan bi bank'
            );
            Http::redirect('index.php?controller=agenceController&task=create');
        }
    }

    public function logout()
    {
        $this->session->delete('auth');
        $this->session->setFlash('success', 'Nio ngui lay jajeufeul');
        Http::redirect('index.php?controller=authController&task=index');
    }
}