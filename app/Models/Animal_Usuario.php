<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['data_aquisicao', 'data_venda', 'usuario_id', 'animal_id'];

    public function animal() {
        return $this->belongsTo('App\Models\Animal');
    }

    public function usuario() {
        return $this->belongsTo('App\Models\Usuario');
    }
}
