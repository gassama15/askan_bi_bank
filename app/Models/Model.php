<?php
namespace App\Models;

use App\Utils\Database;

abstract class Model
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }

    /**
     * findAll
     *
     * @param  string $order
     * @return array
     */
    public function findAll(?string $order = ''): array
    {
        $sql = "SELECT * FROM {$this->table}";
        if ($order) {
            $sql .= ' ORDER BY ' . $order;
        }

        $resultats = $this->pdo->query($sql);

        $items = $resultats->fetchAll(\PDO::FETCH_OBJ);
        return $items;
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
            "SELECT * FROM  {$this->table} WHERE id = :id"
        );

        $query->execute(['id' => $id]);
        $item = $query->fetch();
        return $item;
    }

    /**
     * delete
     *
     * @param  int $id
     * @return void
     */
    public function delete(int $id)
    {
        $query = $this->pdo->prepare(
            "DELETE FROM {$this->table} WHERE id = :id"
        );
        $query->execute(['id' => $id]);
    }
}