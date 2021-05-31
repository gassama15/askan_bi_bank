<?php
namespace App\Models;

use App\Http;

class TypeCompteModel extends Model
{
    protected $table = 'typeCompte';

    public function insert($codeType, $libelleType)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO typeCompte SET codeType = :codeType, libelleType = :libelleType'
        );

        $query->execute(compact('codeType', 'libelleType'));

        Http::redirect('index.php?controller=typeCompteController&task=create');
    }
}