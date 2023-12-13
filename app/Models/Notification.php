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
        return $this->belongsTo(FormSituationDangereuse::class, 'form_id');
    }
    public function formulaireAccidentTravail()
    {
        return $this->belongsTo(FormAccidentTravail::class, 'form_id');
    }
    public function grilleAuditSst()
    {
        return $this->belongsTo(GrilleAuditSst::class, 'form_id');
    }
    public function rapportAccident()
    {
        return $this->belongsTo(RapportAccident::class, 'form_id');
    }
    
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_id');
    }
    public function superieur()
    {
        return $this->belongsTo(Employe::class, 'superieur_id');
    }
}
