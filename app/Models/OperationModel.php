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
}