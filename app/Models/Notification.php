<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'superieur_id',
        'employe_id',
        'nom_employe',
        'nom_Form',
        'form_id',
        'statut_superieur',
        'statut_admin',
    ];
    public function formSituationDangereuse()
    {
        return $this->belongsT(FormSituationDangereuse::class, 'form_id');
    }

}
