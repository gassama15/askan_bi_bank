<?php
namespace App\Models;

class ClientModel extends Model
{
    protected $table = 'client';
    protected $table_compte = 'compte';

    public function insert(
        $nom,
        $prenom,
        $adresse,
        $tel,
        $cni,
        $email,
        $typeClient
    ) {
        $query = $this->pdo->prepare(
            "INSERT INTO {$this->table} SET nom=:nom,prenom=:prenom,adresse=:adresse,tel=:tel,cni=:cni,email=:email,typeClient=:typeClient"
        );
        $query->execute(
            compact(
                'nom',
                'prenom',
                'adresse',
                'tel',
                'cni',
                'email',
                'typeClient'
            )
        );
    }

    public function findAllWithAccount(?string $order = '')
    {
        $sql = "SELECT * FROM {$this->table} cli, {$this->table_compte} cpt WHERE cli.idClient=cpt.idClient";

        if ($order) {
            $sql .= ' ORDER BY cli.' . $order;
        }

        $resultats = $this->pdo->query($sql);

        $items = $resultats->fetchAll(\PDO::FETCH_OBJ);
        return $items;
    }
}