<?php
namespace App\Models;

use App\Http;
use App\Models\Model;

class AgenceModel extends Model
{
    protected $table = 'agence';

    public function insert($nom, $adresse, $email, $telephone)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO agence SET nom = :nom, adresse = :adresse, email = :email, telephone = :telephone'
        );
        $query->execute(compact('nom', 'adresse', 'email', 'telephone'));

        Http::redirect('index.php?controller=agenceController&task=create');
    }

    public function find(int $id)
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM  {$this->table} WHERE idAgence = :idAgence"
        );

        $query->execute(['idAgence' => $id]);
        $item = $query->fetch(\PDO::FETCH_OBJ);
        return $item;
    }
}