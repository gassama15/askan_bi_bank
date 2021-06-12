<?php
namespace App\Models;

class UserModel extends Model
{
    protected $table = 'agent';
    protected $table_compte = 'compte';
    protected $table_client = 'client';

    /**
     * findByLoginAndPassword
     *
     * @param  mixed $login
     * @param  mixed $password
     * @return void
     */
    public function findByLoginAndPassword(string $login, string $password)
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM  {$this->table} WHERE login = :login AND password = :password"
        );

        $query->execute(['login' => $login, 'password' => $password]);
        $user = $query->fetch(\PDO::FETCH_OBJ);
        return $user;
    }

    public function findByNumCompteAndPassword(
        string $num_compte,
        string $password
    ) {
        $query = $this->pdo->prepare(
            "SELECT * FROM {$this->table_client} cli JOIN {$this->table_compte} cpt ON cpt.idClient=cli.idClient WHERE cpt.num_compte = :num_compte AND cli.password = :password"
        );

        $query->execute(compact('num_compte', 'password'));
        $user = $query->fetch(\PDO::FETCH_OBJ);
        // var_dump($user);
        // die();
        return $user;
    }
}