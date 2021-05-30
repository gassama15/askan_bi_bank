<?php
namespace App\Models;

class UserModel extends Model
{
    /**
     * find
     *
     * @param  mixed $id
     * @return void
     */
    public function findByLogin(string $login)
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM  {$this->table} WHERE login = :login"
        );

        $query->execute(['login' => $login]);
        $item = $query->fetch();
        return $item;
    }
}