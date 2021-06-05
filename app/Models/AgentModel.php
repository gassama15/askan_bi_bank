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

    /**
     * find
     *
     * @param  mixed $id
     * @return void
     */
    public function find(int $id)
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM  {$this->table} WHERE idAgent = :id"
        );

        $query->execute(['id' => $id]);
        $item = $query->fetch(\PDO::FETCH_OBJ);
        return $item;
    }

    public function edit(
        $num_agent,
        $nom,
        $prenom,
        $role,
        $idAgence,
        $login,
        $password,
        $idAgent
    ) {
        $query = $this->pdo->prepare(
            'UPDATE agent SET num_agent = :num_agent, nom = :nom, prenom = :prenom, role = :role, idAgence = :idAgence, login = :login, password = :password WHERE idAgent = :idAgent'
        );
        $query->execute(
            compact(
                'num_agent',
                'nom',
                'prenom',
                'role',
                'idAgence',
                'login',
                'password',
                'idAgent'
            )
        );
    }
}