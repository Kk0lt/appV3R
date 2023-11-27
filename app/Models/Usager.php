<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;

class Usager extends Authenticatable
{
    protected $table = 'usagers';
    use HasFactory;

    protected $fillable = ['id', 'username', 'password', 'nom', 'prenom', 'type']; // Assurez-vous que cette liste inclut toutes vos colonnes fillable
    protected $hidden = ['password', 'remember_token'];


    public function username()
        {
            return 'username';
        }

}
