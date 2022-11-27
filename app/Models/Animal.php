<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'chip', 'foto', 'pais_origem', 'data_nascimento', 'tipo_id', 'raca_id', 'pai', 'mae'];

    public function tipo() {
        return $this->belongsTo('App\Models\Tipo');
    }

    public function raca() {
        return $this->belongsTo('App\Models\Raca');
    }
}
