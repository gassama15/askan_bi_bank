<?php
namespace App\Models;

class OperationModel extends Model
{
    protected $table = 'operation';

    public function insert($typeOperation, $montant, $idCompte, $idAgent)
    {
        $sql = "INSERT INTO {$this->table} SET typeOperation = :typeOperation, montant = :montant, idCompte = :idCompte, idAgent = :idAgent";
        $query = $this->pdo->prepare($sql);
        $query->execute(
            compact('typeOperation', 'montant', 'idCompte', 'idAgent')
        );
    }

    public function historiques($idCompte)
    {
        $sql = "SELECT * FROM {$this->table} WHERE idCompte = :idCompte";
        $query = $this->pdo->prepare($sql);
        $query->execute(compact('idCompte'));
        $historiques = $query->fetchAll(\PDO::FETCH_OBJ);
        return $historiques;
    }

    public function historiqueRetraits($idCompte)
    {
        $sql = "SELECT * FROM {$this->table} WHERE idCompte = :idCompte AND typeOperation = 'retrait'";
        $query = $this->pdo->prepare($sql);
        $query->execute(compact('idCompte'));
        $historiques = $query->fetchAll(\PDO::FETCH_OBJ);
        return $historiques;
    }

    public function historiqueDepots($idCompte)
    {
        $sql = "SELECT * FROM {$this->table} WHERE idCompte = :idCompte AND typeOperation = 'depot'";
        $query = $this->pdo->prepare($sql);
        $query->execute(compact('idCompte'));
        $historiques = $query->fetchAll(\PDO::FETCH_OBJ);
        return $historiques;
    }
}