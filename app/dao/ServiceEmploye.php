<?php
namespace App\dao;

use Illuminate\Support\Facades\DB;
use App\metier\Employe;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\MonException;

class ServiceEmploye
{
    public function ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message)
    {
        try {
            // Validate the data here if needed

            // Hash the password using Bcrypt
            $hashedPwd = Hash::make($pwd);

            $employes = new Employe([
                'civilite' => $civilite,
                'nom' => $nom,
                'prenom' => $prenom,
                'pwd' => $hashedPwd,
                'profil' => $profil,
                'interet' => $interet,
                'message' => $message,
            ]);

            $employes->save();
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function getListeEmployes()
    {
        try {
            return Employe::all();
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}
