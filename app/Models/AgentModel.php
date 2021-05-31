<?php
namespace App\Models;

use App\Http;

class AgentModel extends Model
{
    protected $table = 'agent';

    public function insert(
        $num_agent,
        $nom,
        $prenom,
        $role,
        $idAgence,
        $login,
        $password
    ) {
        $query = $this->pdo->prepare(
            'INSERT INTO agent SET num_agent = :num_agent, nom = :nom, prenom = :prenom, role = :role, idAgence = :idAgence, login = :login, password = :password'
        );
        $query->execute(
            compact(
                'num_agent',
                'nom',
                'prenom',
                'role',
                'idAgence',
                'login',
                'password'
            )
        );

        Http::redirect('index.php?controller=agentController&task=create');
    }
}