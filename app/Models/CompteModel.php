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

    public function isValidNumber(string $num_compte)
    {
        $sql = "SELECT num_compte, idCompte FROM {$this->table} WHERE num_compte = :num_compte";
        $query = $this->pdo->prepare($sql);
        $query->execute(compact('num_compte'));
        $result = $query->fetch(\PDO::FETCH_OBJ);

        return $result;
    }

    public function updateAmount(int $solde, $idCompte)
    {
        $solde += $this->getActualSolde($idCompte);

        $sql = "UPDATE {$this->table} SET solde = :solde WHERE idCompte = :idCompte";

        $query = $this->pdo->prepare($sql);
        $query->execute(compact('solde', 'idCompte'));
    }

    private function getActualSolde(int $idCompte)
    {
        $sql = "SELECT solde FROM {$this->table} WHERE idCompte = :idCompte";
        $query = $this->pdo->prepare($sql);
        $query->execute(compact('idCompte'));
        $result = $query->fetch(\PDO::FETCH_OBJ);

        return $result->solde;
    }
}