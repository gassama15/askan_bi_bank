<?php
namespace App\Models;

class ClientModel extends Model
{
    protected $table = 'client';

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
}