<?php
namespace App\Models;

use App\Http;

class TypeCompteModel extends Model
{
    protected $table = 'typeCompte';
    protected $table_compte = 'compte';

    public function insert($codeType, $libelleType)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO typeCompte SET codeType = :codeType, libelleType = :libelleType'
        );

        $query->execute(compact('codeType', 'libelleType'));

        Http::redirect('index.php?controller=typeCompteController&task=create');
    }

    public function findCompteWithTypeCompte($idtypeCompte)
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM {$this->table} typeCpt, {$this->table_compte} cpt WHERE typeCpt.idtypeCompte = :idtypeCompte LIMIT 1"
        );

        $query->execute(compact('idtypeCompte'));
        $item = $query->fetch(\PDO::FETCH_OBJ);
        return $item;
    }
}