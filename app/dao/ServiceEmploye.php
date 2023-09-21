<?php

namespace App\dao;

use Illumiante\Support\Facades\DB;
use App\Exceptions\MonException;

class ServiceEmploye
{
    public function ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message)
    {
        try {
            DB::table('employe')->insert(
                ['civilite' => $civilite, 'nom' => $nom,
                    'prenom' => $prenom, 'pwd' => md5($pwd),
                    'profil' => $profil, 'interet' => $interet,
                    'message' => $message]);
        } catch
            (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
            }
        }

    public
    function getListeEmployes()
    {
        try {
            $mesEmployes = DB::table('employe')
                ->Select()
                ->get();
            return $mesEmployes;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
    }

