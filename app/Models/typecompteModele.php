<?php
namespace App\Models;

use App\Http;
use App\Models\Model;

class AgenceModel extends Model
{
    protected $table = 'typecompte';

    public function insert($codeType, $libelleType)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO typecompte SET codeType = :codeType, libelleType = :libelleType'
        );
        $query->execute(compact('codeType', 'libelleType'));

        Http::redirect('index.php?controller=typecompteController&task=create');
    }
}