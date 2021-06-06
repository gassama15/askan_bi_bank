<?php
namespace App\Models;

use App\Http;
use App\Models\Model;

class operationModel extends Model
{
    protected $table = 'operation';

    public function insert($typeoperation, $montant)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO operation SET typeoperation = :typeoperation, montant = :montant's,
            );
        $query->execute(compact('typeoperation', 'montant'));

        Http::redirect('index.php?controller=operationController&task=create');
    }
}