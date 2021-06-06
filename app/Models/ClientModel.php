<?php
namespace App\Models;

use App\Models\Model;

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
        $typeclient,
    ) {
        $query = $this->pdo->prepare(
            "INSERT INTO {$this->client}  SET nom = :nom, prenom = :prenom, adresse= :adresse, tel = :tel, cni = :cni, email = :email, typeclient = :typeclient"
        );
        $query->execute(
            compact(
                'nom',
                'prenom',
                'adresse',
                'tel',
                'cni',
                'email',
                'typeclient '
            )
        );

        Http::redirect('index.php?controller=agentController&task=create');
    }
}