<?php
namespace App\Models;

class CompteModel extends Model
{
    protected $table = 'compte';

    public function insert(
        $solde,
        $idClient,
        $idAgence,
        $idAgent,
        $idtypeCompte,
        $num_compte
    ) {
        // $num_compte = uniqid('cpte_');
        // var_dump(
        //     $solde,
        //     $idClient,
        //     $idAgence,
        //     $idAgent,
        //     $idtypeCompte,
        //     $num_compte
        // );
        // die();
        $query = $this->pdo->prepare(
            "INSERT INTO {$this->table} SET num_compte=:num_compte, solde=:solde, idClient=:idClient, idAgence=:idAgence, idtypeCompte=:idtypeCompte, idAgent=:idAgent"
        );
        $query->execute(
            compact(
                'solde',
                'idClient',
                'idAgence',
                'idAgent',
                'idtypeCompte',
                'num_compte'
            )
        );
    }
}