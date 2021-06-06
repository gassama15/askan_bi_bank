<?php
namespace App\Models;

use App\Http;
use App\Models\Model;

class contactModel extends Model
{
    protected $table = 'contact';

    public function insert($nom, $email, $tel,$sitweb, $message)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO contact SET nom = :nom, email = :email,tel =:tel, sitweb =:sitweb, message =:message'
        );
        $query->execute(compact('nom', 'email','tel','sitweb','message')
    );

        Http::redirect('index.php?controller=contactController&task=create');
    }
}