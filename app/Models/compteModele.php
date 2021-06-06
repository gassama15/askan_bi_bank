<?php
namespace App\Models;

use App\Http;
use App\Models\Model;

class compteModel extends Model
{
    protected $table = 'compte';

    public function insert($num_compte, , $solde, $statut,)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO compte SET num_compte = :nu,solde = :solde', 
        );
        $query->execute(compact('num_compte',  'solde', 'statut',));

        Http::redirect('index.php?controller=compteController&task=create');
    }
}