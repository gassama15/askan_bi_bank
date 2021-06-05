<?php
namespace App\Models;

use App\Http;

class AgenceModel extends Model
{
    protected $table = 'agence';

    public function insert($nom, $adresse, $email, $telephone)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO agence SET nom = :nom, adresse = :adresse, email = :email, telephone = :telephone'
        );
        $query->execute(compact('nom', 'adresse', 'email', 'telephone'));
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
            "SELECT * FROM  {$this->table} WHERE idAgence = :id"
        );

        $query->execute(['id' => $id]);
        $item = $query->fetch(\PDO::FETCH_OBJ);
        return $item;
    }

    public function edit($nom, $adresse, $email, $telephone, $idAgence)
    {
        $query = $this->pdo->prepare(
            'UPDATE agence SET nom = :nom, adresse = :adresse, email = :email, telephone = :telephone WHERE idAgence = :idAgence'
        );
        $query->execute(
            compact('nom', 'adresse', 'email', 'telephone', 'idAgence')
        );
    }

    public function delete($idAgence)
    {
        $query = $this->pdo->prepare(
            'DELETE FROM agence WHERE idAgence = :idAgence'
        );
        $query->execute(compact('idAgence'));
    }
}