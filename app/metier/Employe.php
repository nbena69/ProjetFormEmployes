<?php


namespace App\metier;

use App\Exceptions\MonException;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Employe extends Model
{
    protected $table = 'Employe';
    public $timestamps = false;
    protected $fillable = [
        'civilite',
        'prenom',
        'nom',
        'pwd',
        'profil',
        'interet',
        'message'
    ];

}

