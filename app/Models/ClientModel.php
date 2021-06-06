<?php
namespace App\Models;

use App\Models\Model;

class ClientModel extends Model
{
    protected $table = 'client';

    public function insert($nom, $prenom,$adresse,$tel,$cni, $email, $login,$password,$typeclient)
    {
        $query = $this->pdo->prepare(
            'INSERT INTO client SET nom = :nom,prenom =:prenom, adresse = :adresse, tel = :tel, cni = :cni,email = :email, login = :login,password= :password,typeclient =:typeclient'
        );
        $query->execute(compact('nom','prenom' ,'adresse','tel','cni', 'email','login','password','typeclient'));

        \App\Http::redirect('index.php?controller=clientController&task=create');
    }
}
