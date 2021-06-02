<?php
namespace App\Models;

class UserModel extends Model
{
    protected $table = 'agent';

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
}